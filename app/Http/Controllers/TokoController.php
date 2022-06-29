<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\produk;
use App\Models\bahan;
use App\Models\ukuran;
use App\Models\harga;
use App\Models\pengguna;

class TokoController extends Controller
{
    public function lihatToko($id)
    {
        $data_toko = toko::find($id);
        $produk_toko = produk::where('id_toko', $id)->get();
        $deksripsi = $data_toko->deskripsi;
        $list_deskripsi = explode('\@', $deksripsi);
        return view('contents.detail_toko', ['data_toko' => $data_toko, 'produk_toko' => $produk_toko, 'list_deskripsi' => $list_deskripsi]);
    }

    public function pesanProduk(Request $request)
    {
        $id = $request->id_produk;
        $produk = produk::find($id);
        $daftar_bahan = bahan::where('id_produk', $id)->get();
        $daftar_ukuran = ukuran::where('id_produk', $id)->get();
        $nama_toko = $request->nama_toko;
        return view('contents.pemesanan', ['produk' => $produk, 'daftar_bahan' => $daftar_bahan, 'daftar_ukuran' => $daftar_ukuran, 'nama_toko' => $nama_toko]);
    }
    public function beliProduk(Request $request)
    {
        $jumlah = $request->jumlah_produk;
        $berat = $jumlah / 5;
        $toko = toko::where('nama', $request->nama_toko)->first();
        return view('contents.pengiriman', ['data_pemesanan' => $request, 'berat' => $berat, 'toko' => $toko]);
    }
    public function checkoutProduk(Request $request)
    {
        $toko = toko::find($request->id_toko);
        $id_produk = $request->id_produk;
        $bahan = $request->bahan;
        $ukuran = $request->inlineRadioOptions;
        $ukuran = ukuran::where("id_produk", $id_produk)->where("kategori", $ukuran)->first();
        $bahan = bahan::where("id_produk", $id_produk)->where("nama_bahan", $bahan)->first();
        $harga = harga::where("id_bahan", $bahan->id)->where("id_ukuran", $ukuran->id)->first();
        $durasi_str = $request->durasi;
        $durasi_arr = explode(" ", $durasi_str);
        $durasi_int = (int)$durasi_arr[0];
        $total_biaya = ($harga->harga * $request->jumlah_produk) + (15000 * $request->jumlah_produk) + (15000 * $request->jumlah_produk * (1 / $durasi_int)) + 100000;
        return view('contents.checkout', ['data_pemesanan' => $request, 'toko' => $toko, 'total_biaya' => $total_biaya]);
    }
    public function prosesPembayaran(Request $request)
    {
        return view('contents.proses_pembayaran', ['data_pemesanan' => $request]);
    }
    public function uploadBukti(Request $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('bukti_pembayaran'), $filename);
        }
        return redirect()->route('index');
    }
    public function sellerIndex(Request $request)
    {
        $username = $request->session()->get('username');
        $data_user = pengguna::where('nama', $username)->first();
        $id_user = $data_user->id;
        $data_toko = toko::where('id_owner', $id_user)->first();
        $daftar_produk = produk::where('id_toko', $data_toko->id)->get();
        return view('contents.seller', ['username' => $username, 'data_toko' => $data_toko, 'daftar_produk' => $daftar_produk]);
    }
    public function editToko(Request $request)
    {
        $username = $request->session()->get('username');
        $data_user = pengguna::where('nama', $username)->first();
        $id_user = $data_user->id;
        $data_toko = toko::where('id_owner', $id_user)->first();
        return view('contents.edit_toko', ['username' => $username, 'data_toko' => $data_toko]);
    }

    public function updateToko(Request $request)
    {
        $toko = toko::find($request->id_toko);
        if ($request->filled('nama_toko')) {
            $toko->nama = $request->nama_toko;
        }
        if ($request->filled('instagram')) {
            $toko->instagram = $request->instagram;
        }
        if ($request->filled('whatsapp')) {
            $toko->whatsapp = $request->whatsapp;
        }
        if ($request->filled('url_gmaps')) {
            $toko->urL_gmaps = $request->url_gmaps;
        }
        if ($request->filled('deskripsi_toko')) {
            $toko->deskripsi = $request->deskripsi_toko;
        }
        $toko->save();
        return redirect()->route("sellerIndex");
    }

    public function editProduct(Request $request)
    {
        $username = $request->session()->get('username');
        $data_produk = produk::find($request->id_produk);
        return view('contents.edit_produk', ['username' => $username, 'data_produk' => $data_produk]);
    }
    public function updateProduct(Request $request)
    {
        $produk = produk::find($request->id_produk);
        if ($request->filled('nama_produk')) {
            $produk->nama = $request->nama_produk;
        }
        if ($request->filled('deskripsi')) {
            $produk->deskripsi = $request->deskripsi;
        }
        $produk->save();
        return redirect()->route("sellerIndex");
    }
}
