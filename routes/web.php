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


Route::get('login', 'AuthController@login')->name('login');
Route::post('logon', 'AuthController@logon')->name('logon');

Route::get('users/create', 'UserController@create')->name('create.user');
Route::post('users', 'UserController@store')->name('store.user');

Route::middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('logout', 'AuthController@logout')->name('logout');

    Route::get('users', 'UserController@list')->name('list.users');
    Route::get('users/trashed', 'UserController@trashed')->name('trashed.users');
    Route::get('users/{id}', 'UserController@edit')->name('edit.user');
    Route::put('users/{id}', 'UserController@update')->name('update.user');
    Route::delete('users/{id}', 'UserController@delete')->name('delete.user');
});
