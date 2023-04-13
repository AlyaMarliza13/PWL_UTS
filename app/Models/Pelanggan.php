<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    //protected $primaryKey = 'id';
    //protected $keyType = 'int';
    protected $fillable = [
        'kode_pelanggan',
        'nama_pelanggan',
        'jenis_kelamin',
        'alamat_pelanggan',
        'hp',
        'riwayat_peminjaman',
    ];
}
