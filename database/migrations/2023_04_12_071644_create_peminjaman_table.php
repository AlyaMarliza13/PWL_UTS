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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_film', 50)->unique();
            $table->string('kode_pelanggan', 50)->unique();
            $table->enum('jenis_peminjaman', ['Harian', 'Mingguan', 'Bulanan']);
            $table->date('tanggal_pinjam');
            $table->date('tanggal_pengembalian');
            $table->integer('biaya_sewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
