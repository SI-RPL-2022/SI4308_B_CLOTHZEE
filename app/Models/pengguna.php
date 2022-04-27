<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\toko;

class pengguna extends Model
{
    use HasFactory;

    public function toko(){
        return $this->hasOne(toko::class, 'id_owner');
    }
}
