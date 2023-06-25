<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Auth')->group(function(){
    Route::get('/login', 'Login\LoginController@loginView');
    Route::get('/register', 'Register\RegisterController@registerView');
    Route::get('/completion', 'Register\RegisterController@completionView');
});

Route::namespace('admin')->group(function(){
    // Route::get('/post', 'Post\Controller@View');
    // Route::get('/category', 'Post\Controller@View');
    // Route::get('/create', 'Post\Controller@View');
    // Route::get('/detail', 'Post\Controller@View');
    // Route::get('/update', 'Post\Controller@View');
    // Route::get('/comment', 'Post\Controller@View');
});