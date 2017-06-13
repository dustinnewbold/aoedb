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
	return view('home');
});

Route::get('/items/{id}/{name}', function ($id, $name) {
	return view('items.view');
});

Route::get('/search', function () {
	return view('search');
});

Route::get('/zones', function() {
	return view('zones.index');
});

Route::get('/zones/{id}/{name}/', function() {
	return view('zones.view', ['comments' => true]);
});