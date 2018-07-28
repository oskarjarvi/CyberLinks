<?php

Route::get('create', 'PostController@create');
Route::get('posts/{post}', 'PostController@show');
Route::post('posts', 'PostController@store');

Route::get('/', 'PostController@index');
Route::get('about', 'PagesController@about');
Route::get('login', 'PagesController@login');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
