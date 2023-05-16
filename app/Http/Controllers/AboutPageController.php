<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutPage;

class AboutPageController extends Controller
{
    public function index(){
        $AboutPage =  AboutPage::all();
        return view('layouts.about', compact('AboutPage'));
    }

    public function submit(Request $request)
{
    $aboutPage = AboutPage::findOrFail(1);
    $aboutPage->content = $request->input('content');
    $aboutPage->save();

    return redirect()->back()->with('success', 'About page updated successfully!');
}

}
