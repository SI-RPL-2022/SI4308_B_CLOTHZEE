<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\toko;

class produk extends Model
{
    use HasFactory;
    public function toko(){
        return $this-> belongsTo(toko::class);
    } 
}
