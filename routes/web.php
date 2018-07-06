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

// Public
Route::get('/', 'PublicController@index')->name('login_page');
Route::post('/', 'PublicController@login');
Route::get('/land','PublicController@land')->name('land');
Route::get('/logout','PublicController@logout')->name('logout');

//Public with login
Route::middleware(['logged_middleware'])->group(function () {
    Route::get('/profile','PublicController@own_profile')->name('own_profile');
});

// Root
Route::prefix('root')->middleware(['root_middleware'])->group(function () {
    Route::get('/index', 'RootController@index')->name('root_index');
});
