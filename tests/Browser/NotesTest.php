<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
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
                    ->clickLink('Notes') // mengklik link notes
                    ->assertPathIs('/notes') // mengecek apakah berada di halaman notes
                    ->clickLink('Create Note') // menekan tombol create note
                    ->assertPathIs('/create-note') // mengecek apakah berada di halaman create note
                    ->type('title', 'Masak') // mengisi kolom tittle dengan Masak
                    ->type('description', 'Masak nasi goreng') // mengisi kolom description dengan Masak nasi goreng
                    ->screenshot('create-note.png') // mengambil screenshot halaman create note
                    ->press('CREATE'); // menekan tombol create

        });
    }
}
