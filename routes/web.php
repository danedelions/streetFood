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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LoginController@getLoginView');
Route::post('doLogin', 'LoginController@doLogin');

Route::resource('admin','AdminController');

Route::get('post','PostController@getAboutView');
Route::get('post','PostController@getPostView');
Route::get('post','PostController@showPosts');
