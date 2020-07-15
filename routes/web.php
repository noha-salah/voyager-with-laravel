<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Home1Controller@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/page/{name}','Home1Controller@GetPage');
Route::get('/post/{id}{slug?}','Home1Controller@GetPost');
Route::get('/post/{id}{slug?}','Home1Controller@GetPost');
Route::post('add/comment','Home1Controller@AddComment');

Auth::routes();

Route::get('/home', 'Home1Controller@index')->name('home');
