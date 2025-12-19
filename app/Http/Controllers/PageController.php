<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show home page
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show about page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show services page
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Show gallery page
     */
    public function gallery()
    {
        return view('gallery');
    }

    /**
     * Show feedback page
     */
    public function feedback()
    {
        return view('feedback');
    }

    /**
     * Show contact page
     */
    public function contact()
    {
        return view('contact');
    }
}
