<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('list_films')->insert([
            [
            'kode_film' => 'A001',
            'nama_film' => 'Avengers Endgame',
            'kategori_film' => 'Aksi',
            'jumlah' => '5',
            'harga_sewa' => 30000,
            ],
            [
             'kode_film' => 'A002',
             'nama_film' => 'Despicable Me 2',
             'kategori_film' => 'Anak-anak',
             'jumlah' => '3',
             'harga_sewa' => 25000,
            ],
            [
             'kode_film' => 'A003',
             'nama_film' => 'A Man Called Otto',
             'kategori_film' => 'Keluarga',
             'jumlah' => '6',
             'harga_sewa' => 35000,
            ],
           [
             'kode_film' => 'A004',
             'nama_film' => 'Ip - Man 6',
             'kategori_film' => 'Aksi',
             'jumlah' => '3',
             'harga_sewa' => 25000,
           ],
           [
            'kode_film' => 'A005',
            'nama_film' => 'Argantara',
            'kategori_film' => 'Drama',
            'jumlah' => '2',
            'harga_sewa' => 25000,
          ],
        ]);
    }
}
