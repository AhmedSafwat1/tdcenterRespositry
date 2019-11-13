<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('lang/{locale}', 'LocalizationController@index');

Route::get('/', function () {
    return view('front.pages.test');
});

Route::get('/about', function () {
    return view('front.pages.about');
});

Route::get('/courses', function () {
    return view('front.pages.courses');
});

Route::get('/teachers', function () {
    return view('front.pages.teachers');
});

Route::get('/blog', function () {
    return view('front.pages.blog');
});

Route::get('/contact', function () {
    return view('front.pages.contact');
});

// Route::get('/', function () {
//     return view('welcome');
// });
