<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalians';
    //protected $primaryKey = 'id';
    //protected $keyType = 'int';
    protected $fillable = [
        'kode_film',
        'kode_pelanggan',
        'jenis_peminjaman',
        'tanggal_pengembalian',
        'denda_keterlambatan',
        'kondisi',
        'status',
    ];
}
