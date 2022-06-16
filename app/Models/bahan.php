<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produk;

class bahan extends Model
{
    use HasFactory;
    public function produk(){
        return $this-> belongsTo(produk::class);
    }
    public function harga(){
        return $this->belongsToMany(harga::class, 'id_bahan');
    }
}
