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
        Schema::create('pemasukans', function (Blueprint $table) {
            $table->id('id_pemasukan');
        $table->unsignedBigInteger('id_barang');
        $table->unsignedBigInteger('id_karyawan');
        $table->date('tanggal');
        $table->integer('jumlah');
        $table->decimal('total_harga', 15, 2);
        $table->foreign('id_barang')->references('id_barang')->on('barangs')->onDelete('cascade');
        $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukans');
    }
};
