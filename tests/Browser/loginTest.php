<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class loginTest extends DuskTestCase
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
                ->screenshot('bukti');
        });
    }
}
