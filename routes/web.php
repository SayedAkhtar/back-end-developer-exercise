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

Route::get('/', 'frontendController@index');

Auth::routes();

Route::get('/admin', 'backendController@index')->name('admin');
Route::get('/admin/create-post', 'backendController@postIndex');
Route::post('/admin/create-post', 'backendController@createPost');
Route::get('/admin/edit-post/{id}', 'backendController@postEditIndex');
Route::post('/admin/edit-post/{id}', 'backendController@editPost');
Route::get('/admin/delete/{id}', 'backendController@destroyPost');

Route::get('/{username}/{postid}', 'frontendController@showPost');
Route::get('/{username}', 'frontendController@showAllPost');
