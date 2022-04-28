<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\produk;
use App\Models\bahan;
use App\Models\ukuran;

class TokoController extends Controller
{
    public function lihatToko($id){
        $data_toko = toko::find($id);
        $produk_toko = produk::where('id_toko', $id)->get();
        $deksripsi = $data_toko->deskripsi;
        $list_deskripsi = explode('\@', $deksripsi);
        return view('contents.detail_toko', ['data_toko' => $data_toko, 'produk_toko' => $produk_toko, 'list_deskripsi' => $list_deskripsi]);
    }

    public function pesanProduk(Request $request){
        $id = $request->id_produk;
        $produk = produk::find($id);
        $daftar_bahan = bahan::where('id_produk', $id)->get();
        $daftar_ukuran = ukuran::where('id_produk', $id)->get();
        return view('contents.pemesanan', ['produk'=> $produk, 'daftar_bahan' => $daftar_bahan, 'daftar_ukuran' => $daftar_ukuran]);
    }
}
