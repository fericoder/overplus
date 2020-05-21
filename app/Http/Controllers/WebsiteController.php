<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function FAQ()
    {
        return view('website.FAQ');
    }
    public function AboutUs()
    {
        return view('website.AboutUs');
    }
    public function Contact()
    {
        return view('website.Contact');
    }
}
