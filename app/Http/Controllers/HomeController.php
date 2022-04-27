<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;

class HomeController extends Controller
{
    public function index(){
        $list_toko = toko::all();
        return view('contents.home', ['list_toko' => $list_toko]);
    }
}
