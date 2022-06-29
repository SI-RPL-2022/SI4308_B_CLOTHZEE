<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;

class LoginController extends Controller
{
    public function loginPage(){
        return view("contents.login");
    }
    public function login(Request $request){
        $result = pengguna::where('email', $request->email)->where('password', $request->password);
        if ($result->first()){
            // dd($result->first()->nama);
            $request->session()->put('username', $result->first()->nama);
            if ($result->first()->role == "seller"){
                return redirect()->route('sellerIndex');
            } else{
                return redirect()->route('index');
            }
        } else{
            return redirect()->route("loginPage");
        };
    }

    public function registerPage(){
        return view("contents.register");
    }
    public function register(Request $request){
        $penggunaBaru = new pengguna();
        $penggunaBaru->email = $request->email;
        $penggunaBaru->password = $request->password;
        $penggunaBaru->nama = $request->username;
        $penggunaBaru->role = "customer";
        $penggunaBaru->save();
        return redirect()->route('loginPage');
    }

    public function logout(Request $request){
        $request->session()->forget('username');
        return redirect()->route('index');
    }
}
