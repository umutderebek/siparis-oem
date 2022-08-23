<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(UrunSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(KategoriUrunSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StatesSeeder::class);
        //$this->call(KullaniciSeeder::class);
    }
}
