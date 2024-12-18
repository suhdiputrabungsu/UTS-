<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        Karyawan::create([
            'nama_lengkap' => 'Budi Santoso',
            'posisi' => 'Kasir',
            'nomor_telepon' => '081234567890',
        ]);

        Karyawan::create([
            'nama_lengkap' => 'Siti Aminah',
            'posisi' => 'Staff Gudang',
            'nomor_telepon' => '081234567891',
        ]);
    }
}

