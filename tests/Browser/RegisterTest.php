<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->ClickLink('Daftar')
                    ->assertPathIs('/register')
                    ->type('email','randiaaaaaaaaka@gmail.com')
                    ->type('username','randddddika')
                    ->type('password','12222')
                    ->press('Register')
                    ->assertSee('Login')
                    ->screenshot('bukti');
        });
    }
}
