<?php
Route::get('/', 'PostController@index');
Route::get('create', 'PostController@create');
Route::post('posts', 'PostController@store');

Route::get('posts/{post}', 'PostController@show');
Route::get('posts/{post}/edit', 'PostController@edit');
Route::post('posts/{post}', 'PostController@update');

Route::get('about', 'PagesController@about');
Route::get('login', 'PagesController@login');
Route::get('register', 'PagesController@register');

Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

Route::post('register', 'UserController@create');
Route::get('profile/{user}', 'UserController@profile');
Route::get('profile/{user}/edit', 'UserController@edit');
Route::post('profile/{user}/update', 'UserController@update');
Route::get('profile/{user}/delete', 'UserController@delete');


Route::post('/{post}/comments', 'CommentController@store');

Route::post('votes/{post}', 'VoteController@store');
