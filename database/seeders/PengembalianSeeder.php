<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pengembalians')->insert([
            [
             'kode_film' => 'A003',
             'kode_pelanggan' => 'B004',
             'jenis_peminjaman' => 'Harian',
             'tanggal_pengembalian' => '2023-03-29',
             'denda_keterlambatan' => 0,
             'kondisi' => 'Baik',
             'status' => 'Lunas',
            ],
            [
             'kode_film' => 'A001',
             'kode_pelanggan' => 'B002',
             'jenis_peminjaman' => 'Mingguan',
             'tanggal_pengembalian' => '2023-04-09',
             'denda_keterlambatan' => 10000,
             'kondisi' => 'Sedikit lecet dan kotor',
             'status' => 'Belum Lunas',
            ],
            [
             'kode_film' => 'A004',
             'kode_pelanggan' => 'B001',
             'jenis_peminjaman' => 'Bulanan',
             'tanggal_pengembalian' => '2023-04-30',
             'denda_keterlambatan' => 0,
             'kondisi' => 'Baik',
             'status' => 'Lunas',
            ],
             [
             'kode_film' => 'A002',
             'kode_pelanggan' => 'B003',
             'jenis_peminjaman' => 'Harian',
             'tanggal_pengembalian' => '2023-04-15',
             'denda_keterlambatan' => 20000,
             'kondisi' => 'Tempat DVD retak dan ada yang pecah',
             'status' => 'Belum Lunas',
            ],
             [
             'kode_film' => 'A005',
             'kode_pelanggan' => 'B005',
             'jenis_peminjaman' => 'Harian',
             'tanggal_pengembalian' => '2023-03-13',
             'denda_keterlambatan' => 0,
             'kondisi' => 'Baik',
             'status' => 'Lunas',
            ],
        ]);
    }
}
