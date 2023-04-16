<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            list_filmsSeeder::class,
            PelangganSeeder::class,
            PeminjamanSeeder::class,
            PengembalianSeeder::class
        ]);
    }
}
