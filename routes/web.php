<?php

Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');

Route::get('/', 'PagesController@index');
Route::get('/login', 'PagesController@login');

//Route::get('/', 'PostController@index');
