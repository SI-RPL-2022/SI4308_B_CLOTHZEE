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
    return view('welcome');
});

Route::get('/detail_produk', function () {
    return view('detail_produk');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/proses_pembayaran', function () {
    return view('proses_pembayaran');
});

Route::get('/review', function () {
    return view('review');
});