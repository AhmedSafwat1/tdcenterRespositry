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

//Route::get('/', "WebController@index");

Route::get('/', "Site\EventController@index");

Route::get('/main-search', "Site\EventController@main")->name("main.search");

Route::get('/events/{id}', "Site\EventController@details")->name("event.details")->where('id', '[0-9]+');

Route::get('/about',"WebController@about");

Route::get('/courses', "WebController@courses");

Route::get('/teachers',  "WebController@teachers");

Route::get('/blog',  "WebController@blog");

Route::get('/contact',  "WebController@contact");


// Route::get('/', function () {
//     return view('welcome');
// });


// route for sit
Route::group(
    [
        'namespace'  => 'Site',
        'prefix'     => "site",
    ]
    , function() {



    Route::get('login',  "Auth\LoginController@showLoginForm")->name("site.showLogin");
    Route::any('logout',  "Auth\LoginController@logout")->name("logout");
    Route::post('login', "Auth\LoginController@login")->name("site.login");
    Route::get('register',  "Auth\UsersController@showRegistrationForm")->name("site.showRegiser");
    Route::post('register', "Auth\UsersController@register")->name("site.register");
    Route::get('get-faculty/{id}',  "Auth\UsersController@getFacitly")
        ->name("get-faculty");

    Route::get('get-department/{id}',  "Auth\UsersController@getDepartment")
        ->name("get-department");

    Route::get('edit-profile',  "Auth\UsersController@showEditForm")
        ->name("edit.form");
    Route::post('edit-profile',  "Auth\UsersController@saveEdit")
        ->name("site.profile.edit");


});

