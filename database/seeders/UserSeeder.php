<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    { 
        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'username' => 'karyawan1',
            'password' => bcrypt('karyawan123'),
            'role' => 'karyawan'
        ]);
    }
}

