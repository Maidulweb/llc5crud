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

Route::get('/llclogin', 'indexController@llclogin')->name('llclogin');
Route::post('/llclogin', 'indexController@loginprocess');

Route::get('/llcregister', 'indexController@llcregister')->name('llcregister');
Route::post('/llcregister', 'indexController@registerprocess');
