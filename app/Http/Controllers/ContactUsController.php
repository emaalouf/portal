<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\ContactUs;

class ContactUsController extends Controller
{


    public function send(Request $request)
        {


            $contactUs = \App\Models\ContactUs::create([
                    'full_name' => $request->full_name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,
            ]);

            $contactUs->save();

            return redirect()->route('welcome')->with('success', 'Your message has been sent successfully!');
        }
        
    public function show()
        {
            $contactUs = ContactUs::all();
            return view('contact.show', compact('contactUs'));
        }
}



