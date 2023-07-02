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
Route::group(['middleware' => ['guest']], function(){
    Route::namespace('Auth')->group(function(){
        Route::namespace('Login')->group(function(){
            Route::get('/login', 'LoginController@loginView')->name('loginView');
            Route::post('/login/post', 'LoginController@loginPost')->name('loginPost');
        });
        Route::namespace('Register')->group(function(){
            Route::get('/register', 'RegisterController@registerView')->name('registerView');
            Route::post('/register/post', 'RegisterController@registerPost')->name('registerPost');
            Route::get('/completion', 'RegisterController@completionView')->name('completionView');
        });
    });
});

Route::group(['middleware' => ['auth']], function(){
    Route::namespace('Admin')->group(function(){
        Route::namespace('Post')->group(function(){
            Route::get('/posts', 'PostsController@postsView')->name('postsView');
            // Route::get('/posts/category', 'PostsController@categoryView')->name('categoryView');
            // Route::get('/posts/create', 'PostsController@createView')->name('createView');
            // Route::get('/detail', 'Post\Controller@View');
            // Route::get('/update', 'Post\Controller@View');
            // Route::get('/comment', 'Post\Controller@View');
            Route::get('/logout', 'PostsController@logout')->name('logout');
        });
    });
});

Route::get('/posts/category', 'Admin\Post\PostsController@categoryView')->name('categoryView');
Route::get('/posts/create', 'Admin\Post\PostsController@createView')->name('createView');


Route::get('/', function () {
    return redirect('/login');
})->name('login');