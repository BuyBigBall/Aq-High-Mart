<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function contactus()
    {
        $page = "contactus";
        return view('frontend.pages.page', compact('page') );
    }
   
    public function faq()
    {
        $page = "faq";
        return view('frontend.pages.page', compact('page') );
    }
    
    public function help()
    {
        $page = "help";
        return view('frontend.pages.page', compact('page') );
    }
   
    public function aboutus()
    {
        $page = "aboutus";
        return view('frontend.pages.page', compact('page') );

    }
     
    public function services()
    {
        $page = "services";
        return view('frontend.pages.page', compact('page') );
    }
    
    public function company()
    {
        $page = "company";
        return view('frontend.pages.page', compact('page') );
    }
    
    public function invester()
    {
        $page = "invester";
        return view('frontend.pages.page', compact('page') );

    }

    public function consultation()
    {
        $page = "consultation";
        return view('frontend.pages.page', compact('page') );
    }
    public function advanced()
    {
        $page = "advanced";
        return view('frontend.pages.page', compact('page') );
    }
    public function howtouse()
    {
        $page = "howtouse";
        return view('frontend.pages.page', compact('page') );
    }

    public function blog()
    {
        $page = "blog";
        return view('frontend.pages.page', compact('page') );
    }

}
