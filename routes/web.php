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
    Route::get('/login', 'Login\LoginController@loginView')->name('loginView');
    Route::post('/login/post', 'Login\LoginController@loginPost')->name('loginPost');
    Route::get('/register', 'Register\RegisterController@registerView')->name('registerView');
    Route::post('/register/post', 'Register\RegisterController@registerPost')->name('registerPost');
    Route::get('/completion', 'Register\RegisterController@completionView')->name('completionView');
});

Route::namespace('Admin')->group(function(){
    Route::get('/posts', 'Post\PostsController@postsView');
    // Route::get('/category', 'Post\Controller@View');
    // Route::get('/create', 'Post\Controller@View');
    // Route::get('/detail', 'Post\Controller@View');
    // Route::get('/update', 'Post\Controller@View');
    // Route::get('/comment', 'Post\Controller@View');
});