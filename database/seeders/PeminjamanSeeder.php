<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('peminjaman')->insert([
            [
            'kode_film' => 'A003',
            'kode_pelanggan' => 'B004',
            'jenis_peminjaman' => 'Harian',
            'tanggal_pinjam' => '2023-03-27',
            'tanggal_pengembalian' => '2023-03-30',
            'biaya_sewa' => 35000,
            ],
            [
             'kode_film' => 'A001',
             'kode_pelanggan' => 'B002',
             'jenis_peminjaman' => 'Mingguan',
             'tanggal_pinjam' => '2023-04-01',
             'tanggal_pengembalian' => '2023-04-08',
             'biaya_sewa' => 30000,
            ],
            [
             'kode_film' => 'A004',
             'kode_pelanggan' => 'B001',
             'jenis_peminjaman' => 'Bulanan',
             'tanggal_pinjam' => '2023-04-02',
             'tanggal_pengembalian' => '2023-05-01',
             'biaya_sewa' => 25000,
            ],
           [
            'kode_film' => 'A002',
            'kode_pelanggan' => 'B003',
            'jenis_peminjaman' => 'Harian',
            'tanggal_pinjam' => '2023-04-10',
            'tanggal_pengembalian' => '2023-04-13',
            'biaya_sewa' => 25000,
           ],
           [
            'kode_film' => 'A005',
            'kode_pelanggan' => 'B005',
            'jenis_peminjaman' => 'Harian',
            'tanggal_pinjam' => '2023-03-10',
            'tanggal_pengembalian' => '2023-03-13',
            'biaya_sewa' => 25000,
          ],
        ]);
    }
}
