<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }
}
