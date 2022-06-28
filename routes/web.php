<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\LoginController;

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

// Route::get('/detail_produk', function () {
//     return view('detail_produk');
// });

// Route::get('/pemesanan', function () {
//     return view('pemesanan');
// });

// Route::get('/pengiriman', function () {
//     return view('pengiriman');
// });


// Route::get('/search', function () {
//    return view('search');
// });
// Route::get('/home', function () {
//    return view('home');
// });

// Route::get('/edit_produk', function () {
//    return view('edit_produk');
// });

// Route::get('/resi', function () {
//    return view('resi');
//});
// Route::get('/', [SearchController::class, 'searchMenu'])->name('searchMenu');
// Route::get('/search', [SearchController::class, 'searchToko'])->name('searchToko');

// Route::get('/proses_pembayaran', function () {
//     return view('proses_pembayaran');
// });

// Route::get('/search', function () {
//     return view('search');
// });
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/edit_toko', function () {
//     return view('edit_toko');
// });

// Route::get('/checkout', function () {
//     return view('checkout');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/search', [SearchController::class, 'searchToko'])->name('searchToko');

Route::get('/login', [LoginController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/toko/{id}', [TokoController::class, 'lihatToko'])->name('lihatToko');
Route::get('/pesan', [TokoController::class, 'pesanProduk'])->name('pesanProduk');
Route::post('/beli', [TokoController::class, 'beliProduk'])->name('beliProduk');
Route::post('/checkout', [TokoController::class, 'checkoutProduk'])->name('checkoutProduk');
Route::post('/prosesPembayaran', [TokoController::class, 'prosesPembayaran'])->name('prosesPembayaran');
Route::post('/uploadBukti', [TokoController::class, 'uploadBukti'])->name('uploadBukti');