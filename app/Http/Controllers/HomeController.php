<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;

class HomeController extends Controller
{
    public function index(Request $request){
        $username = $request->session()->get('username');
        if ($username){
            $username = $username;
        } else{
            $username = "";
        }
        $list_toko = toko::all();
        $deskripsi_toko = array();
        foreach ($list_toko as $toko){
            $temp = $toko->deskripsi;
            $temp = explode('\@', $temp);
            array_push($deskripsi_toko, $temp[0]);
        };
        return view('contents.home', ['username' => $username , 'list_toko' => $list_toko, 'deskripsi_toko' => $deskripsi_toko]);
    }
}
