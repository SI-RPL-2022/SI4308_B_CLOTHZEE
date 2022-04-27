<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;

class SearchController extends Controller
{
    public function searchMenu(){
        return view('contents.temporary.search_page');
    }
    public function searchToko(Request $request){
        $keyword = $request->keyword;
        $list_toko = toko::where('lokasi', $keyword)->get();
        return view('contents.temporary.search_result', ['list_toko' => $list_toko]);
    }
}
