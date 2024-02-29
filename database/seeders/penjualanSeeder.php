<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // 10 penjualan data
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'caca',
                'penjualan_kode' => 'PK001',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'cinta',
                'penjualan_kode' => 'PK002',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'yuli',
                'penjualan_kode' => 'PK003',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'dedy',
                'penjualan_kode' => 'PK004',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'hansen',
                'penjualan_kode' => 'PK005',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'cila',
                'penjualan_kode' => 'PK006',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'putra',
                'penjualan_kode' => 'PK007',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'ciko',
                'penjualan_kode' => 'PK008',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'ali',
                'penjualan_kode' => 'PK009',
            ],
            [
                'penjualan_tanggal' => now(),
                'user_id' => 3,
                'pembeli' => 'kiko',
                'penjualan_kode' => 'PK010',
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
