<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocalizationController extends Controller
{
    public function index(Request $request,$locale)
    {

        App::setLocale($locale);

        //storing the locale in session to get it back in the middleware
        session()->put('locale', $locale);

        // dd($locale);
        return redirect()->back();
    }
}
