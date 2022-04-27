<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;

class SearchController extends Controller
{
    public function searchToko(Request $request){
        $keyword = $request->keyword;
        $list_toko = toko::where('lokasi', $keyword)->get();
        return view('contents.search', ['list_toko' => $list_toko, 'keyword' => $keyword]);
    }
}
