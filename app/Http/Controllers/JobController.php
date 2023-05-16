<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\Post;
use App\Models\Skills;
use App\Models\Education;
use App\Models\Interests;
use App\Models\PersonalInformation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobController extends Controller
{
public function index($id)
{
    $userId = auth()->id();
    $skills = Skills::where('user_id', $id)->get()->toArray();
    $education = Education::where('user_id', $id)->get()->toArray();   
    $interests = Interests::where('user_id', $id)->get()->toArray();

    $posts = Post::all()->toArray();
    $personal_information = PersonalInformation::where('user_id', $id)->get()->toArray();

    $postsWithSkills = [];
    $postsWithEducation = [];
    $postsWithInterests = [];

    // Loop over all posts
    foreach($posts as $post){
        $postContainsSkill = false;
        $postContainsEducation = false;
        $postContainsInterest = false;

        // Loop over all skills for each post
        foreach($skills as $skill){
            // Check if the skill is contained in the post title or description
            if(stripos(strtolower(str_replace(' ', '', $post['job_title'])), strtolower(str_replace(' ', '', $skill['skill_name']))) !== false || stripos(strtolower(str_replace(' ', '', $post['job_title'])), strtolower(str_replace(' ', '', $skill['skill_name']))) !== false){
                $postContainsSkill = true;
                break;
            }
        }

        // Loop over all education for each post
        foreach($education as $edu){
            // Check if the education is contained in the post title or description
            if(stripos(strtolower(str_replace(' ', '', $post['job_title'])), strtolower(str_replace(' ', '', $edu['degree_title']))) !== false || stripos(strtolower(str_replace(' ', '', $post['job_title'])), strtolower(str_replace(' ', '', $edu['degree_title']))) !== false){
                $postContainsEducation = true;
                break;
            }
        }

        // Loop over all interests for each post
        foreach($interests as $interest){
            // Check if the interest is contained in the post title or description
            if(stripos(strtolower(str_replace(' ', '', $post['job_title'])), strtolower(str_replace(' ', '', $interest['interest']))) !== false || stripos(strtolower(str_replace(' ', '', $post['job_title'])), strtolower(str_replace(' ', '', $interest['interest']))) !== false){
                $postContainsInterest = true;
                break;
            }
        }

        // If a post contains any skills, add it to the $postsWithSkills array
        if($postContainsSkill){
            $postsWithSkills[] = $post;     
        }

        // If a post contains any education, add it to the $postsWithEducation array
        if($postContainsEducation){
            $postsWithEducation[] = $post;  
        }

        // If a post contains any interests, add it to the $postsWithInterests array
        if($postContainsInterest){
            $postsWithInterests[] = $post;  
        
        }
    }

    // Pass the arrays to the view
    return view('job.index', compact('postsWithSkills', 'postsWithEducation', 'postsWithInterests'));
}

public function search(Request $request)
{
      $skills = Skills::where('user_id', $userId)->get()->toArray();

}




    public function getCategories()
    {
        $categories = CompanyCategory::all();
        return $categories->toJson();
    }
    public function getAllOrganization()
    {
        $companies = Company::all();
        return $companies->toJson();
    }
    public function getAllByTitle()
    {
        $posts = Post::where('deadline', '>', Carbon::now())->get()->pluck('id', 'job_title');
        return $posts->toJson();
    }
}
