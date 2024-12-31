<?php

namespace Database\Seeders;

use App\Models\Pemasukan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pemasukan::created([
            'id_barang' => 1, // Sesuai BarangSeeder
            'id_karyawan' => 1, // Sesuai KaryawanSeeder
            'tanggal' => now(),
            'jumlah' => 2,
            'total_harga' => 30000000,
        ]);
    }
}
