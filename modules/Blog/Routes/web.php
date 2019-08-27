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

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog-index');
    Route::get('/create', 'BlogController@create')->name('blog-create');
    Route::post('/store', 'BlogController@store')->name('blog-store');
    Route::get('/{id}', 'BlogController@show')->name('blog-show');
});
