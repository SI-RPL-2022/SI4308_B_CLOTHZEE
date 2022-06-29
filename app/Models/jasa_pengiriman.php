<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\toko;

class jasa_pengiriman extends Model
{
    use HasFactory;
    public function toko(){
        return $this->belongsToMany(toko::class, 'toko_jasa_pengirimen', 'id_jasa_pengiriman', 'id_toko');
    }
}
