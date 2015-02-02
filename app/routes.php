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

Route::get('/', [
	'as'   => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/blogs', [
	'as'   => 'blog.list',
	'uses' => 'BlogController@getList'
]);

Route::get('/blog/{id}', [
	'as'   => 'blog.id',
	'uses' => 'BlogController@getBlog'
]);

Route::get('/blogs/create', [
	'as'   => 'blog.create',
	'uses' => 'BlogController@create'
]);

Route::post('/blogs/create', [
	'as' => 'blog.create.post',
	'uses' => 'BlogController@store'
]);

Route::delete('/blogs/delete/{id}', [
	'as' => 'blog.delete',
	'uses' => 'BlogController@delete'
]);









