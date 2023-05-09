<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
        public function save(Request $request)
        {

            $template = $request->input('template');

            session(['template' => $template]);

            $session_data = session()->all(); // Save session data in a variable
            dd($session_data);

            return redirect()->route('cv.preview')->with('session_data', $session_data);
        }

}
