<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CVController extends Controller
{
        public function save(Request $request)
        {

            $template = $request->input('template');
            $user = User::all();

            session(['template' => $template]);

            $session_data = session()->all(); // Save session data in a variable
            $template = $request->session()->get('template');

                 return redirect()->route('cv.index')->with('session_data', $session_data);

            }
        }


