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

// Route::get('/', function () 
// {
//     return view('welcome');
// });

Route::get('/', 'Auth\LoginController@showLoginForm')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('{any}', 'HomeController@index')->where('any', '.*');

/* Blog Route */

Route::get('/blog_list', 'BlogController@blog_list')->name('blog_list');

