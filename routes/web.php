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

Route::get('/', 'LoginController@index')->name('login_page');
Route::post('/', 'LoginController@login');
Route::get('/land','LoginController@land')->name('land');
Route::get('/logout','LoginController@logout')->name('logout');

// Root
Route::prefix('root')->middleware(['root_middleware'])->group(function () {
    Route::get('/index', 'RootController@index')->name('root_index');
});
