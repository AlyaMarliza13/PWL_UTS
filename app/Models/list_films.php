<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_films extends Model
{
    use HasFactory;
    protected $table = 'list_films';
    //protected $primaryKey = 'id';
    //protected $keyType = 'int';
    protected $fillable = [
        'kode_film',
        'nama_film',
        'kategori_film',
        'jumlah',
        'harga_sewa',
    ];
}
