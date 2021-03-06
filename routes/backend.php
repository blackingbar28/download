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
Route::auth();

Route::group(['middleware' => 'auth:web'], function() {

    //Darhboard
    Route::get('/', 'DashBoardController@index')->name('admin.dashboard');

    Route::resource('categories', 'CategoryController');
    Route::resource('articles', 'ArticleController');
    Route::resource('metas', 'MetaController');
});