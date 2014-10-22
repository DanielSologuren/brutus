<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('example');
});

Route::get('about', function()
{
    return View::make('about');
});

Route::get('work', function()
{
    return View::make('work');
});

Route::get('contact', function()
{
    return View::make('contact');
});

// ======= 404 page ======


App::missing(function($exception)
{
	// shows an error page (app/views/error.blade.php)
	// returns a page not found error
	return Responsive::view('error',array(), 404);
});
