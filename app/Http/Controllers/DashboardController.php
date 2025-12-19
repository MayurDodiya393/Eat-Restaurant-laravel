<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show user dashboard (protected route)
     */
    public function index()
    {
        return view('dashboard');
    }
}