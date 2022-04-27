<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ukuran;

class harga extends Model
{
    use HasFactory;
    public function ukuran(){
        return $this->belongsTo(ukuran::class);
    }
}
