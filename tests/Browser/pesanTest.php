<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class pesanTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->ClickLink('Masuk')
                    ->assertPathIs('/login')
                    ->type('email','randiaaaaaaaaka@gmail.com')
                    ->type('password','12222')
                    ->press('Login')
                    ->assertSee('Semua Konfeksi')
                    ->ClickLink('Lihat detail')
                    ->assertPathIs('/toko/1')
                    ->radio('#id_produk', '2')
                    ->press('Pesan')
                    ->assertSee('Pemesanan di dikatailor')
                    ->assertPathIs('/pesan')
                    ->select('bahan','katun')
                    ->type('jumlah_produk','2')
                    ->radio('inlineRadioOptions','L')
                    ->select('durasi','2 Minggu')
                    ->press('pesan')

                    ->assertPathIs('/beli')
                    ->assertSee('Detail Pemesanan')
                    ->type('nama_penerima','Agus')
                    ->type('no_hp','082266554499')
                    ->type('alamat','perumahan maju jaya no.1')
                    ->type('kotakecamatan','wanasari')
                    ->type('kode_pos','11002')
                    ->press('Bayar')
                    
                    ->assertPathIs('/checkout')
                    ->assertSee('Checkout Pemesanan')
                    ->radio('pembayaran','bca')
                    // ->press('Bayar')

                    ->screenshot('bukti');
                });
    }
}
