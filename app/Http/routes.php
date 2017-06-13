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

Route::get('/search', 'SearchController@search');

// Zones
Route::get('/zones/{id}/{name}/comments/', 'CommentController@show');
Route::get('/zones/{id}/{name}/', 'ZoneController@show');
Route::resource('zones', 'ZoneController', ['except' => ['show']]);

// NPCs
Route::get('/npcs/{id}/{name}/comments/', 'CommentController@show');
Route::get('/npcs/{id}/{name}/', 'NPCController@show');
Route::resource('npcs', 'NPCController', ['except' => ['show']]);

// Quests
Route::get('/quests/{id}/{name}/comments/', 'CommentController@show');
Route::get('/quests/{id}/{name}/', 'QuestController@show');
Route::resource('quests', 'QuestController', ['except' => ['show']]);