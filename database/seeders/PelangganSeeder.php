<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pelanggans')->insert([
            [
            'kode_pelanggan' => 'B001',
            'nama_pelanggan' => 'Frisaranda Diouf Julio',
            'jenis_kelamin' => 'Laki-laki',
            'alamat_pelanggan' => 'Kabupaten Probolinggo',
            'hp' => '081123456789',
            'riwayat_peminjaman' => 'Ip - Man 6',
            ],
            [
            'kode_pelanggan' => 'B002',
            'nama_pelanggan' => 'Muhammad Fikri Ardiansyah',
            'jenis_kelamin' => 'Laki-laki',
            'alamat_pelanggan' => 'Malang',
            'hp' => '082234567891',
            'riwayat_peminjaman' => 'Avengers Endgame',
            ],
            [
            'kode_pelanggan' => 'B003',
            'nama_pelanggan' => 'Muhammad Aqilul Muttaqin',
            'jenis_kelamin' => 'Laki-laki',
            'alamat_pelanggan' => 'Malang',
            'hp' => '081878652349',
            'riwayat_peminjaman' => 'Despicable Me 2',
            ],
           [
            'kode_pelanggan' => 'B004',
            'nama_pelanggan' => 'Lailatul Badriyah',
            'jenis_kelamin' => 'Perempuan',
            'alamat_pelanggan' => 'Malang',
            'hp' => '083345678910',
            'riwayat_peminjaman' => 'Argantara',
           ],
           [
            'kode_pelanggan' => 'B005',
            'nama_pelanggan' => 'Diah Putri Nofianti',
            'jenis_kelamin' => 'Perempuan',
            'alamat_pelanggan' => 'Malang',
            'hp' => '081878652349',
            'riwayat_peminjaman' => 'A Man Called Otto',
          ],
        ]);
    }
}
