<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;

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

Route::get('/detail_produk', function () {
    return view('detail_produk');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/pengiriman', function () {
    return view('pengiriman');
});

Route::get('/proses_pembayaran', function () {
    return view('proses_pembayaran');
});

Route::get('/review', function () {
    return view('review');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/edit_toko', function () {
    return view('edit_toko');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/search', [SearchController::class, 'searchToko'])->name('searchToko');

