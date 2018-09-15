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
Route::get('/createCategory','CategoryController@index')->name('createCategory');
Route::get('/categoryList','CategoryController@categoryList')->name('categoryList');
Route::get('/delete_cat/{id}','CategoryController@delete_cat')->name('delete_cat');
Route::post('/saveCategory','CategoryController@save')->name('saveCategory');

Route::get('/createPost','PostController@createPost')->name('createPost');
Route::get('/postList','PostController@postList')->name('postList');
Route::post('/savePost','PostController@save')->name('savePost');
Route::get('/delete_post/{id}','PostController@delete_post')->name('delete_post');