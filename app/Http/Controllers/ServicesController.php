<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function service(){
        $title = "Services";
        return view('service', compact('title'));
    }
}
