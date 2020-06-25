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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboardAdmin', 'HomeController@showDBAdmin');


//untuk Admin
Route::get('/tambah_user', 'UserController@addUser');
Route::post('/tambah_user', 'UserController@saveUser');
Route::get('/tampil_user', 'UserController@index');
Route::get('/edit_user/{id}','UserController@editUser');
Route::post('/edit_user/{id}','UserController@updateUser');
Route::get('/hapus_user/{id}','UserController@deleteUser');
Route::get('/reset_password/{id}', 'UserController@resetPassword');
Route::get('/profile/{id}', 'UserController@editProfile');
Route::post('/profile/{id}', 'UserController@updateProfile');


Route::get('/cetak_form','PendaftaranController@cetakForm');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tampil_data', 'ReportController@index');
Route::get('/tambah_data', 'ReportController@addReport');
Route::post('/tambah_data', 'ReportController@storeReport');
Route::get('/cetak_data/{tanggal}', 'ReportController@cetakReport');
Route::get('/edit_data/{tanggal}', 'ReportController@editReport');
Route::post('/edit_data/{tanggal}', 'ReportController@updateReport');
Route::get('/hapus_data/{id}', 'ReportController@deleteData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
