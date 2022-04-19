<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\toko;
use App\Models\ukuran;
class produk extends Model
{
    use HasFactory;
    public function toko(){
        return $this-> belongsTo(toko::class);
    }
    public function ukuran(){
        return $this-> hasMany(ukuran::class, 'id_produk');
    }
}
