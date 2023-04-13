<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('list_films', function (Blueprint $table) {
            $table->id();
            $table->string('kode_film', 50)->unique();
            $table->string('nama_film', 100);
            $table->enum('kategori_film', ['Aksi', 'Anak-anak', 'Drama', 'Fiksi', 'Komedi', 'Keluarga', 'Petualangan', 'Sejarah',]);
            $table->integer('jumlah');
            $table->integer('harga_sewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_films');
    }
};
