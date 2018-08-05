<?php

Route::get('create', 'PostController@create');
Route::get('posts/{post}', 'PostController@show');
Route::post('posts', 'PostController@store');
Route::get('/', 'PostController@index');
Route::post('posts/{post}', 'PostController@update');

Route::get('about', 'PagesController@about');
Route::get('login', 'PagesController@login');
Route::get('register', 'PagesController@register');

Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

Route::post('register', 'UserController@create');
Route::get('profile/{user}', 'UserController@profile');
Route::post('profile/{user}/update', 'UserController@update');

Route::post('/{post}/comments', 'CommentController@store');
