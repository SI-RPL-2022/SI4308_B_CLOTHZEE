<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;

class SearchController extends Controller
{
    public function searchToko(Request $request){
        $keyword = $request->keyword;
        $list_toko = toko::where('lokasi', $keyword)->get();
        $deskripsi_toko = array();
        foreach ($list_toko as $toko){
            $temp = $toko->deskripsi;
            $temp = explode('\@', $temp);
            array_push($deskripsi_toko, $temp[0]);
        };
        return view('contents.search', ['list_toko' => $list_toko, 'keyword' => $keyword, 'deskripsi_toko' => $deskripsi_toko]);
    }
}
