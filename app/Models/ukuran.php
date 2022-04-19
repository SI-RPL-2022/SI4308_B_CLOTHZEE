<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produk;

class ukuran extends Model
{
    use HasFactory;
    public function produk(){
        return $this-> belongsTo(produk::class);
    }
}
