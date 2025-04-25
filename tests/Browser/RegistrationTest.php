<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // mengunjungi halaman utama
                ->assertSee('Modul 3') // mengecek apakah halaman started muncul
                ->clickLink('Register') // mengklik link register
                ->assertPathIs('/register') // mengecek apakah berada di halaman register
                ->type ('name', 'rere') // mengisi kolom nama
                ->type ('email', 'rere@gmail.com') //mengisi kolom email
                ->type ('password', 'password') //mengisi kolom password
                ->type ('password_confirmation', 'password') //mengisi kolom konformasi password
                ->press('REGISTER') //mengecek tombol register
                ->assertPathIs('/dashboard'); // mengecek apakah berada di halaman dashboard

        });
    }
}
