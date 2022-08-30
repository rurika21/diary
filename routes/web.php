<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TargetController@index');
Route::get('/posts/create', 'TargetController@create');
Route::get('/posts/{post}', 'TargetController@show');
Route::post('/posts', 'TargetController@store');