<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\toko;

class cara_bayar extends Model
{
    use HasFactory;
    public function toko(){
        return $this->belongsToMany(toko::class, 'cara_bayar_tokos', 'id_toko', 'id_cara_bayar');
    }
}
