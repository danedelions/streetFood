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
Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('admin','AdminController');

Route::get('about', function(){
	return View('about');
});

Route::get('post','PostController@getPostView');
Route::get('post','PostController@showPosts');
Route::get('archive','PostController@archivePost');


Route::get('{post}/comment', 'CommentController@showComments');
Route::post('{postId}/comment', 'CommentController@addComment');

Route::get('admin/{post}/comment', 'AdminCommentController@showComments');
Route::get('admin/{post}/comment', 'AdminCommentController@showComments');
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/replies','ReplyController');
