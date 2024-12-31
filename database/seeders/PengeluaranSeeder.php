<?php

namespace Database\Seeders;

use App\Models\Pengeluaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pengeluaran::created([
            'id_barang' => 1, // Sesuai BarangSeeder
            'id_karyawan' => 1, // Sesuai KaryawanSeeder
            'tanggal' => now(),
            'jumlah' => 1,
            'total_harga' => 15000000,
        ]);
    }
}
