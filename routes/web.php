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

Route::get('/','LoginController@index');
Route::post('/','LoginController@do_login')->name('doLogin');
Route::get('/admin','AdminController@index')->name('admin.index');
Route::get('/admin/nasabah','NasabahController@index')->name('admin.nasabah');


Route::get('/kepala','StaffController@index')->name('kepala.index');

