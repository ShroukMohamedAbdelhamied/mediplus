<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function doctor(){
        $title = "Doctors";
        return view('doctors', compact('title'));
    }
}
