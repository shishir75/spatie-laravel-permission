<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/post', 'PostController@index')->name('post.index');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post', 'PostController@store')->name('post.store');
    Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
    Route::put('/post/{id}', 'PostController@update')->name('post.update');

    Route::get('/role', 'RoleController@index')->name('role.index');
    Route::get('/role/create', 'RoleController@create')->name('role.create');
    Route::post('/role', 'RoleController@store')->name('role.store');
});


