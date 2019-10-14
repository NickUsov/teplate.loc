<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('frontend.site.index');
    }
    public function about(){
        return view('frontend.site.about');
    }
    public function portfolio(){
        return view('frontend.site.portfolio');
    }
    public function contact(){
        return view('frontend.site.contact');
    }
}
