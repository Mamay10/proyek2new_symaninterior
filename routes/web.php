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
    return view('Login');
});

Route::get('/regist', function () {
    return view('register');
});

Route::post('/', function () {
    return view('Login');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/home/barang', function () {
    return view('barang');
});

Route::get('/home/barang/detail barang', function () {
    return view('detail barang');
});

Route::get('/home/jasa', function () {
    return view('jasa');
});

Route::get('/home/barang&jasa', function () {
    return view('barang&jasa');
});

Route::get('/home/keranjang', function () {
    return view('keranjang');
});

Route::get('/home/history', function () {
    return view('history');
});

Route::get('/home/notifikasi', function () {
    return view('barang');
});


