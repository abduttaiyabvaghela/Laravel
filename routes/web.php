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

Route::resource('post', 'PostsController');

Route::get('about', function () {
    return '<h1>About Page</h1>';
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'This is Comments ID : '.$commentId; 
});

// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });