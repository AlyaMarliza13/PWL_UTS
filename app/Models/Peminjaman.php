<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    //protected $primaryKey = 'id';
    //protected $keyType = 'int';
    protected $fillable = [
        'kode_film',
        'kode_pelanggan',
        'jenis_peminjaman',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'biaya_sewa',
    ];
}
