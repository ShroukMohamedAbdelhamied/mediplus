<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    public function error(){
        $title = 'Errors';
        return view('error', compact('title'));
    }
}
