<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\produk;

class TokoController extends Controller
{
    public function lihatToko($id){
        $data_toko = toko::find($id);
        $produk_toko = produk::where('id_toko', $id)->get();
        $deksripsi = $data_toko->deskripsi;
        $list_deskripsi = explode('\@', $deksripsi);
        return view('contents.detail_toko', ['data_toko' => $data_toko, 'produk_toko' => $produk_toko, 'list_deskripsi' => $list_deskripsi]);
    }
}
