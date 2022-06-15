<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produk;
use App\Models\pengguna;
use App\models\cara_bayar;
use App\models\jasa_pengiriman;

class toko extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'deskripsi', 'lokasi', 'whatsapp', 'instagram', 'foto_profil', 'id_owner', 'url_gmaps'
    ];
    public function produk(){
        return $this->hasMany(produk::class, 'id_toko');
    }
    public function pengguna(){
        return $this->belongsTo(pengguna::class);
    }
    public function cara_bayar(){
        return $this->belongsToMany(cara_bayar::class, 'cara_bayar_tokos', 'id_cara_bayar', 'id_toko');
    }
    public function jasa_pengiriman(){
        return $this->belongsToMany(jasa_pengiriman::class, 'toko_jasa_pengirimen', 'id_toko', 'id_jasa_pengiriman');
    }
}
