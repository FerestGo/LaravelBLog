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


Auth::routes();

Route::get('/', 'BlogController@index')->name('blog.index');
 
Route::get('/category/{slug}', 'BlogController@category')->name('blog.category');
 
Route::get('/project/{slug}', 'BlogController@show')->name('blog.show');

Route::get('/{page}.html', 'PageController@index')->name('page');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin'); 