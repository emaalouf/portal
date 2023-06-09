<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\Post;
use App\Models\Skills;
use App\Models\PersonalInformation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $users = User::with(['PersonalInformation', 'Skills'])->get();
        $json = $users->toJson();
        return view('job.index');
        
    }

    //api route
// public function search(Request $request)
// {
//     $jobSkills = explode(',', $request->job_skills);
    
//     $users = User::with('skills')->whereHas('skills', function($query) use($jobSkills) {
//         $query->whereIn('name', $jobSkills);
//     })->get();
    
//     $postIds = $users->flatMap(function($user) {
//         return $user->posts->pluck('id');
//     });
    
//     $posts = Post::whereIn('id', $postIds);
    
//     if ($request->q) {
//         $posts = $posts->where('job_title', 'LIKE', '%' . $request->q . '%');
//     } elseif ($request->category_id) {
//         $posts = $posts->whereHas('company', function ($query) use ($request) {
//             return $query->where('company_category_id', $request->category_id);
//         });
//     } elseif ($request->job_level) {
//         $posts = $posts->where('job_level', 'LIKE', '%' . $request->job_level . '%');
//     } elseif ($request->education_level) {
//         $posts = $posts->where('education_level', 'LIKE', '%' . $request->education_level . '%');
//     } elseif ($request->employment_type) {
//         $posts = $posts->where('employment_type', 'LIKE', '%' . $request->employment_type . '%');
//     }
    
//     $posts = $posts->has('company')->with('company')->paginate(10);

//     return $posts->toJson();
// }

//  public function search(Request $request)
//     {
//         if ($request->q) {
//             $posts = Post::where('job_title', 'LIKE', '%' . $request->q . '%');
//         } elseif ($request->category_id) {
//             $posts = Post::whereHas('company', function ($query) use ($request) {
//                 return $query->where('company_category_id', $request->category_id);
//             });
//         } elseif ($request->job_level) {
//             $posts = Post::where('job_level', 'Like', '%' . $request->job_level . '%');
//         } elseif ($request->education_level) {
//             $posts = Post::where('education_level', 'Like', '%' . $request->education_level . '%');
//         } elseif ($request->employment_type) {
//             $posts = Post::where('employment_type', 'Like', '%' . $request->employment_type . '%');
//         } else {
//             $posts = Post::take(30);
//         }

//         $posts = $posts->has('company')->with('company')->paginate(1);

//         return $posts->toJson();
//     }

public function search(Request $request)
{
    $jobSkillUserQuery = JobSkillUser::query();


    if ($request->job_skills) {
        $jobSkillIds = explode(',', $request->job_skills);
        $jobSkillUserQuery->whereIn('job_skill_id', $jobSkillIds);
    }


    if ($request->user_skills) {
        $userSkillIds = explode(',', $request->user_skills);
        $jobSkillUserQuery->whereIn('user_skill_id', $userSkillIds);
    }


    $postIds = $jobSkillUserQuery->pluck('post_id')->unique()->toArray();

    $posts = Post::whereIn('id', $postIds)->has('company')->with('company')->paginate(1);

    return $posts->toJson();
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
