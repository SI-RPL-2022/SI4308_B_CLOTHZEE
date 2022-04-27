<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;

class HomeController extends Controller
{
    public function index(){
        $list_toko = toko::all();
        $deskripsi_toko = array();
        foreach ($list_toko as $toko){
            $temp = $toko->deskripsi;
            $temp = explode('\@', $temp);
            array_push($deskripsi_toko, $temp[0]);
        };
        return view('contents.home', ['list_toko' => $list_toko, 'deskripsi_toko' => $deskripsi_toko]);
    }
}
