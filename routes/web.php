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

Route::get('/', 'indexController@index')->name('index');

Route::get('/register', 'LoginregisterController@llcregister')->name('llcregister');
Route::post('/register', 'LoginregisterController@registerprocess');

Route::get('/login', 'LoginregisterController@llclogin')->name('llclogin');
Route::post('/login', 'LoginregisterController@loginprocess');

Route::get('/profile', 'LoginregisterController@llcprofile')->name('llcprofile');

Route::post('/logout', 'LoginregisterController@llclogout')->name('llclogout');


Route::get('/categories', 'CategoriesController@index')->name('categories.index');
Route::get('/categories/add', 'CategoriesController@create')->name('categories.create');
Route::post('/categories', 'CategoriesController@store')->name('categories.store');
Route::get('/categories/{id}', 'CategoriesController@show')->name('categories.show');
Route::get('/categories/{id}/edit', 'CategoriesController@edit')->name('categories.edit');
Route::put('/categories/{id}/update', 'CategoriesController@update')->name('categories.update');
Route::delete('/categories/{id}/delete', 'CategoriesController@delete')->name('categories.delete');




