<?php

namespace App\Http\Frontend\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
}