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

Route::get('/', 'IndexController@index');
Route::get('/template', 'IndexController@template');

Route::api(['version' => 'v1', 'prefix' => 'access'], function()
{
    Route::resource('users', 'UsersController', array('only' => array('index', 'show')));
});

Route::api(['version' => 'v1', 'prefix' => 'production'], function()
{
    Route::resource('users', 'UsersController', array('only' => array('index', 'show', 'store', 'update', 'destroy')));
});