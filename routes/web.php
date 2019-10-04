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

Route::get('/', 'HomeController@index');
Route::get('/appointment', 'HomeController@appointment');
Route::get('/doctors/list', 'DoctorController@list');
Route::get('/doctors/add', 'DoctorController@add');
Route::post('/doctors/store', 'DoctorController@store');
Route::get('/doctors/edit/{id}', 'DoctorController@edit');
Route::get('/doctors/delete/{id}', 'DoctorController@delete');
Route::get('/doctors-list', 'DoctorController@doctorList');
