<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'TargetController@index');
    Route::get('/posts/create', 'TargetController@create');
    Route::get('/posts/{post}/edit', 'TargetController@edit');
    Route::put('/posts/{post}', 'TargetController@update');
    Route::get('/posts/{post}', 'TargetController@show');
    Route::post('/posts', 'TargetController@store');
    Route::delete('/posts/{post}', 'TargetController@delete');
});