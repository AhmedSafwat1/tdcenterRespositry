<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /*
     *  route /
     * */
    public function index(Request $request){
        return view('front.pages.test');
    }


    /*
     *  about /
     * */
    public  function about() {
        return view('front.pages.about');
    }

    /*
     *  courses /
     * */
    public  function courses() {
        return view('front.pages.courses');
    }

    /*
     *  teachers /
     * */
    public  function teachers() {
        return view('front.pages.teachers');
    }

    /*
     *  blog /
     * */
    public  function blog() {
        return view('front.pages.blog');
    }

    /*
     *  contact /
     * */
    public  function contact() {
        return view('front.pages.contact');
    }

    public  function login() {
        return view('front.pages.login');
    }
}
