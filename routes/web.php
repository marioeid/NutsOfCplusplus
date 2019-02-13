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

Route::get('/', 'pagescontroller@index');
Route::get('/blog', 'pagescontroller@blog');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/createpost','Postcontroller@store');
Route::delete('/deletepost/{id}',['uses'=>'Postcontroller@destroy','as'=>'post.delete','middleware'=>'auth']);
Route::post('/posts/comment','commentscontroller@store');
Route::post('/posts/tags/{tag}','TagsController@index');