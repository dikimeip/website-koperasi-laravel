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
Route::get('/admin/nasabah/tambah','NasabahController@create')->name('admin.nasabah_tambah');
Route::post('/admin/nasabah/do_tambah','NasabahController@insert')->name('admin.nasabah_do_tambah');
Route::get('/admin/nasabah/show_tambah/{id}','NasabahController@show')->name('admin.nasabah_tampil');
Route::get('/admin/nasabah/edit/{id}','NasabahController@edit')->name('admin.nasabah_edit');
Route::post('/admin/nasabah/update/{id}','NasabahController@update')->name('admin.nasabah_upate');
Route::get('/admin/tabungan','TabunganController@index')->name('admin.tabungan');
Route::get('/admin/tabungan/tambah','TabunganController@create')->name('admin.tabungan_tambah');
Route::post('/admin/tabungan/do_tambah','TabunganController@insert')->name('admin.tabungan_do_tambah');
Route::get('/admin/tabungan/show_tambah/{id}','TabunganController@show')->name('admin.tabungan_tampil');



Route::get('/kepala','StaffController@index')->name('kepala.index');

