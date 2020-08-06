<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/posts', 'PostsController');

Route::get('/posts/create','PostsController@create');

// to click on link and delete instead of button
Route::get('posts/delete/{id}', ['as' => 'posts.delete', 'uses' => 'PostsController@destroy']);

