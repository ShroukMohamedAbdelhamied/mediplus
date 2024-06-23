<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = "Mediplus Website";
        return view('home', compact('title'));
    }
    public function languageChange($locale)
    {
        // Set the locale
        app()->setLocale($locale);
    
        // Store the selected locale in the session
        session()->put('locale', $locale);
    
        // Redirect back to the previous page
        return redirect()->back();
    }
}
