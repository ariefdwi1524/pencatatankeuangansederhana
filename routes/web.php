<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\DompetController@index');

//DOMPET

Route::get('/dompet','App\Http\Controllers\DompetController@index');

Route::get('/dompetbuatbaru', function () {
    return view('master.dompet.buatbaru');
});

Route::get('/dompetubah', function () {
    return view('master.dompet.ubah');
});

Route::get('/dompetdetail', function () {
    return view('master.dompet.detail');
});

//KATEGORI

Route::get('/kategori', function () {
    return view('master.kategori.kategori');
});

Route::get('/kategoribuatbaru', function () {
    return view('master.kategori.buatbaru');
});

Route::get('/kategoriubah', function () {
    return view('master.kategori.ubah');
});

Route::get('/kategoridetail', function () {
    return view('master.kategori.detail');
});

//TRANSAKSIMASUK

Route::get('/transaksidompetmasuk', function () {
    return view('transaksi.dompetmasuk.dompetmasuk');
});

Route::get('/dompetmasukbuatbaru', function () {
    return view('transaksi.dompetmasuk.buatbaru');
});

//TRANSAKSIKELUAR

Route::get('/transaksidompetkeluar', function () {
    return view('transaksi.dompetkeluar.dompetkeluar');
});

Route::get('/dompetkeluarbuatbaru', function () {
    return view('transaksi.dompetkeluar.buatbaru');
});

//LAPORAN

Route::get('/laporan', function () {
    return view('laporan.laporan');
});

Route::get('/result', function () {
    return view('laporan.result');
});