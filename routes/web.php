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

