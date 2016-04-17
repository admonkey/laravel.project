<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    //return "Hello World!";
    $people = ['Taylor', 'Matt', 'Jeff'];
    //$people = [];
    //return view('welcome', ['people' => $people]);

    //return View::make();
    //return view('welcome', []);
    return view('welcome', compact('people'));
    //return view('welcome')->with('people',$people);
    //return view('welcome')->withPeople($people);
});

Route::get('about', function () {
    return view('pages.about'); // resources/views/pages/about.blade.php
});
