<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $title = "Contact of Mediplus";
        return view('contact', compact('title'));
    }
}