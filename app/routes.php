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
	$posts = Post::all();

	return View::make('home', array('posts' => $posts));
});




Route::get('post/{slug}', function($slug)
{
	$post = Post::whereSlug($slug)->first();

	if ( ! $post)
		return Redirect::to('/');

	return View::make('post', array('post' => $post));
});




Route::get('user/{id}', function($id)
{
	$user = User::find($id);

	if ( ! $user)
		return Redirect::to('/');

	return View::make('user', array('user' => $user));
});