<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produk;

class toko extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'deskripsi', 'lokasi', 'whatsapp', 'instagram'
    ];
    public function produk(){
        return $this->hasMany(produk::class, 'id_toko');
    }
}
