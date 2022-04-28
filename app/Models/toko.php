<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    use HasFactory;

    public function caraPembayaran(){
        return $this->hasMany(caraPembayaran::class, 'id_pembayaran');
    }
}
