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
        return view('contents.detail_toko', ['data_toko' => $data_toko, 'produk_toko' => $produk_toko]);
    }
}
