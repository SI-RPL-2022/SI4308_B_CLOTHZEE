<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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

Route::get('/search', function () {
    return view('search');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/edit_produk', function () {
    return view('edit_produk');
});

Route::get('/resi', function () {
    return view('resi');
});
// Route::get('/', [SearchController::class, 'searchMenu'])->name('searchMenu');
// Route::get('/search', [SearchController::class, 'searchToko'])->name('searchToko');

