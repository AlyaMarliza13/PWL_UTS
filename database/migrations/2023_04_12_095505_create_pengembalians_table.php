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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->string('kode_film', 50)->unique();
            $table->string('kode_pelanggan', 50)->unique();
            $table->enum('jenis_peminjaman', ['Harian', 'Mingguan', 'Bulanan']);
            $table->date('tanggal_pengembalian');
            $table->integer('denda_keterlambatan');
            $table->string('kondisi', 150);
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
