<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produk;
use App\Models\pengguna;

class toko extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'deskripsi', 'lokasi', 'whatsapp', 'instagram', 'foto_profil', 'id_owner'
    ];
    public function produk(){
        return $this->hasMany(produk::class, 'id_toko');
    }
    public function pengguna(){
        return $this->belongsTo(pengguna::class);
    }
}
