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

Route::get('index','PageController@getindex');

Route::get('loaisp/{id}','PageController@getloaisp');

Route::get('chitietsp/{id}','PageController@getchitietsp');

Route::get('lienhe','PageController@getlienhe');

Route::get('gioithieu','PageController@getgioithieu');