<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInformation;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interests;
use App\Models\Languages;
use App\Models\PersonalInformation;
use App\Models\Projects;
use App\Models\Skills;
use App\Helpers\Tokenizer;
use App\Helpers\Stopwords;
use App\Helpers\Stemming;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class NLPController extends Controller
{
    private $jobPostings; // Declare the instance variable

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the authenticated user's ID
        $userId = auth()->id();

        // Fetch the data for the authenticated user
        $personal_information = PersonalInformation::where('user_id', $userId)->get()->toArray();

        $id = $personal_information[0]['id'];
        $contact_information = ContactInformation::where('user_id', $id)->get()->toArray();
        $education = Education::where('user_id', $id)->get()->toArray();
        $experience = Experience::where('user_id', $id)->get()->toArray();
        $interests = Interests::where('user_id', $id)->get()->toArray();
        $languages = Languages::where('user_id', $id)->get()->toArray();
        $projects = Projects::where('user_id', $id)->get()->toArray();
        $skills = Skills::where('user_id', $id)->get()->toArray();

        $degreeTitle = $education[0]['degree_title'];
        $response = Http::get("http://localhost:5000/keyword/{$degreeTitle}/location/Beirut");
        $body = json_decode($response->body());
        $url = $body->url;

        $getBody = Http::get($url);
        $bodyjson = json_decode($getBody->body());

        if ($bodyjson !== null && isset($bodyjson->jobPostings)) {
            $this->jobPostings = array_slice($bodyjson->jobPostings, 0, 60);

            // Preprocessing
            $tokenizer = new Tokenizer();
            $stopwords = new Stopwords();
            $stemmer = new Stemming();

            // Term of interest
            $term = "software development";

            // Calculate TF-IDF
            $totalDocuments = count($this->jobPostings);
            $documentFrequency = 0;

            $jobPostingsWithTFIDF = new Collection();

            foreach ($this->jobPostings as $jobPosting) {
                $text = $jobPosting->title . ' ' . $jobPosting->location . ' ' . $jobPosting->url;

                // Tokenize the text into individual terms
                $terms = $tokenizer->tokenize($text);

                // Remove stopwords and perform stemming on the terms
                $terms = $stopwords->removeStopwords($terms);
                $terms = $stemmer->stem($terms);

                // Calculate term frequency
                $termFrequency = 0;
                foreach ($terms as $term) {
                    if ($term === $term) {
                        $termFrequency++;
                    }
                }

                if ($termFrequency > 0) {
                    $documentFrequency++;
                }

                // Calculate TF-IDF
                $tf = $termFrequency / count($terms);
                $idf = log($totalDocuments / $documentFrequency);
                $tfidf = $tf * $idf;

                // Store the job posting with its TF-IDF score
                $jobPostingsWithTFIDF->push([
                    'jobPosting' => $jobPosting,
                    'tfidf' => $tfidf
                ]);
            }

            // Sort the job postings by TF-IDF score in descending order
            $sortedJobPostings = $jobPostingsWithTFIDF->sortByDesc('tfidf');

            // Output the sorted job postings
            foreach ($sortedJobPostings as $job) {
                $jobPosting = $job['jobPosting'];
                $tfidf = $job['tfidf'];

                echo "Title: " . $jobPosting->title . "<br />";
                echo "Location: " . $jobPosting->location . "<br />";
                echo "URL: " . $jobPosting->url . "<br />";
                echo "TF-IDF for 'software development': " . $tfidf . "<br />";
            }
        } else {
            echo "No job postings found.";
        }
        session(['bodyJson' => $bodyjson]);
    }
}
