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

Route::get('praktikum1', function () {
    return view('prak1web'); //kalau sudah connect model, cara ini tidak bisa
});
// ulangi cara diatas untuk Tugas 4

Route::get('praktikum2','ViewController@showPraktikum2');
// ulangi cara ini untuk link ETS dan Tugas PHP
// 2 versi  = ada yang 2 file, 1 file
// bagi yang bikin 2 file harus membuat 2 route identifier

Route::get('gravity','ViewController@gravity');

Route::post('physics','ViewController@physics');

Route:: get('tugas4', function(){
    return view('tugas4');
}
);

Route::get('ets','ViewController@showets');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');


//route CRUD
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{ID}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/delete/{ID}','MutasiController@delete');

Route:: get('home', function(){
    return view('websitepweb.website');
}
);

//route CRUD
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
