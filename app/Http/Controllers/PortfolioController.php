<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio(){
        $title = "portfolio";
        return view('portfolio', compact('title'));
    }
}
