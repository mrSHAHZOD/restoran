<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function menu()
    {
        return view('pages.menu');
    }
    public function testimonial()
    {
        return view('pages.testimonial');
    }
    public function team()
    {
        return view('pages.team');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
