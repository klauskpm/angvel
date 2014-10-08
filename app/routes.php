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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data

Route::get('/', function(){
	return file_get_contents('http://www.boadica.com.br');
});
Route::get('/profile', 'IndexController@profile');
Route::get('/profile/preview', 'IndexController@preview');

Route::get('/aside', 'IndexController@aside');
Route::get('/aside-template', 'IndexController@asideTemplate');

Route::api(['version' => 'v1', 'prefix' => 'access'], function()
{
    Route::resource('users', 'UsersController', array('only' => array('index', 'show')));
});

Route::api(['version' => 'v1', 'prefix' => 'production'], function()
{
    Route::resource('users', 'UsersController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
});