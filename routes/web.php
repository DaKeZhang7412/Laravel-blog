<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//use blog\Http\Controllers;
//Authentication Routes
//Route::get('auth/login', 'Auth\LoginController@showLoginForm');
//Route::post('auth/login','Auth\LoginController@login');
//Route::get('auth/logout', 'Auth\LoginController@logout');
//
////Registration Routes
//Route::get('auth/register', 'Auth\RegisterController@register');
//Route::post('auth/register', 'Auth\RegisterController@authorize');

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' =>'blog.index']);
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');


Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index');
