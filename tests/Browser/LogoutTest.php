<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Modul 3') //melihat teks Modul 3
            ->clicklink('Log in') // mengklik link login
            ->assertPathIs('/login') // mengecek apakah berada di halaman login
            ->type('email', 'rere@gmail.com') //mengisi kolom email dengan rere@gmail.com
            ->type('password', 'password') //mengisi kolom password dengan password
            ->press('LOG IN') //mengecek tombol login
            ->assertPathIs('/dashboard') // mengecek apakah berada di halaman dashboard
            ->assertSee('Dashboard') // Menampilkan "Welcome" setelah login berhasil
            ->press('rere') // Menekan "user rere" 
            ->clickLink('Log Out'); // Klik link teks "Log Out" untuk halaman logout
        });
    }
}
