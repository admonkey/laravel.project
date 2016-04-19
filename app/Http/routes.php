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

// Route::get('/', function () {
//     //return view('welcome');
//     //return "Hello World!";
//     $people = ['Taylor', 'Matt', 'Jeff'];
//     //$people = [];
//     //return view('welcome', ['people' => $people]);
// 
//     //return View::make();
//     //return view('welcome', []);
//     return view('welcome', compact('people'));
//     //return view('welcome')->with('people',$people);
//     //return view('welcome')->withPeople($people);
// });

Route::get('/','PagesController@home');

/*
Route::get('about', function () {
    return view('page.about'); // resources/views/pages/about.blade.php
});*/

Route::get('about','PagesController@about');

Route::get('cards', 'CardsController@index');
/*
Route::get('cards/create', 'CardsController@create');

Route::post('cards', 'CardsController@store');

Route::get('cards/1', 'CardsController@show');

Route::get('cards/1/edit', 'CardsController@edit');

Route::put('cards/1', 'CardsController@update');

Route::delete('cards/1', 'CardsController@destroy');
*/
