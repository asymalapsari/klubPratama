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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/listpemain', ['uses' => 'DaftarPemainController@index','as' => 'listpemain']);
Route::get('/hasilseleksi', ['uses' => 'HasilSeleksiController@index','as' => 'hasilseleksi']);
Route::get('/input-data', ['uses' => 'InputController@index','as' => 'input']);
Route::get('/daftar-pemain',  'DaftarPemainController@index');
Route::get('/input-nilai',  'InputController@inputNilai');
Route::post('/store-biodata', 'InputController@storeBiodata');
Route::post('/store-kriteria', 'InputController@storeKriteria');
Route::post('/update-kriteria', 'InputController@update');
Route::get('/selengkapnya/{id}', 'InputController@show');
Route::get('/edit/{id}', 'InputController@edit');
Route::get('/delete/{id}', 'InputController@destroy');
