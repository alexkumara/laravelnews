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

Route::get('/', function () {
    return "<h1>Hello World</h1>";
});

Route::get('/users/{name}/comments/{idComment}', function($name, $idComment){
    return "Selamat datang $name, id kamu = $idComment";
    });

Route::get('barang/', function () {
    return view("barang");
});

Route::get('pelanggan/', function () {
    return view("pelanggan");
});

Route::get('transaksi/', function () {
    return view("transaksi");
});

Route::get('barang', 'BarangController@index');

Route::get('pelanggan', 'PelangganController@index');

Route::get('transaksi', 'TransaksiController@index');

Route::get('pengguna', 'PenggunaController@index');
//13.4 Template Inheritance
Route::get('/berita', 'BeritaController@index');

Route::get('/berita/olahraga', 'BeritaController@olahraga');

Route::get('/berita/politik', 'BeritaController@politik');
//14 CRUD
Route::resource('/news', 'NewsController');