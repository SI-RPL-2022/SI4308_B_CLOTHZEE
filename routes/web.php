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

// Route::get('/detail_produk', function () {
//     return view('detail_produk');
// });

// Route::get('/pemesanan', function () {
//     return view('pemesanan');
// });

// Route::get('/search', function () {
//     return view('search');
// });
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::get('/search', [SearchController::class, 'searchToko'])->name('searchToko');

