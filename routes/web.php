<?php


//PostRoutes
Route::get('/','PostController@index');
Route::get('create', 'PostController@create');
Route::post('posts', 'PostController@store');
Route::get('posts/{post}', 'PostController@show')->name('show');
Route::get('posts/{post}/edit', 'PostController@edit');
Route::get('posts/{post}/delete', 'PostController@delete');
Route::post('posts/{post}', 'PostController@update');

//PagesRoutes
Route::get('about', 'PagesController@about');
Route::get('login', 'PagesController@login');
Route::get('register', 'PagesController@register')->name('register');

//AuthRoutes
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

//UserRoutes
Route::post('register', 'UserController@create');
Route::get('profile/{user}', 'UserController@profile')->name('profile');
Route::get('profile/{user}/edit', 'UserController@edit');
Route::post('profile/{user}/update', 'UserController@update');
Route::get('profile/{user}/delete', 'UserController@delete');

//CommentRoutes
Route::post('/{post}/comments', 'CommentController@store');
Route::get('{id}/editComment', 'CommentController@edit');
Route::post('{id}/update', 'CommentController@update');
Route::get('{id}/delete', 'CommentController@delete');

//VoteRoute
Route::post('votes/{post}', 'VoteController@store');
