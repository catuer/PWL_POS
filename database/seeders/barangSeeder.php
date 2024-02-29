<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [
        [
            'kategori_id' => '1',
            'barang_kode' => 'MNM001',
            'barang_nama' => 'Air Mineral 600ml',
            'harga_beli' => 5000,
            'harga_jual' => 7000,
        ],
        [
            'kategori_id' => '1',
            'barang_kode' => 'MNM002',
            'barang_nama' => 'Jus Apel 1L',
            'harga_beli' => 10000,
            'harga_jual' => 15000,
        ],
        [
            'kategori_id' => '2',
            'barang_kode' => 'MKN001',
            'barang_nama' => 'Nasi Goreng Spesial',
            'harga_beli' => 15000,
            'harga_jual' => 25000,
        ],
        [
            'kategori_id' => '2',
            'barang_kode' => 'MKN002',
            'barang_nama' => 'Mie Ayam Bakso',
            'harga_beli' => 12000,
            'harga_jual' => 20000,
        ],
        [
            'kategori_id' => '3',
            'barang_kode' => 'SNC001',
            'barang_nama' => 'Keripik Kentang',
            'harga_beli' => 8000,
            'harga_jual' => 12000,
        ],
        [
            'kategori_id' => '3',
            'barang_kode' => 'SNC002',
            'barang_nama' => 'Cokelat Batang',
            'harga_beli' => 10000,
            'harga_jual' => 15000,
        ],
        [
            'kategori_id' => '4',
            'barang_kode' => 'SBK001',
            'barang_nama' => 'Beras 5kg',
            'harga_beli' => 50000,
            'harga_jual' => 60000,
        ],
        [
            'kategori_id' => '4',
            'barang_kode' => 'SBK002',
            'barang_nama' => 'Minyak Goreng 2L',
            'harga_beli' => 25000,
            'harga_jual' => 30000,
        ],
        [
            'kategori_id' => '5',
            'barang_kode' => 'PRB001',
            'barang_nama' => 'Sabun Mandi',
            'harga_beli' => 5000,
            'harga_jual' => 7000,
        ],
        [
            'kategori_id' => '5',
            'barang_kode' => 'PRB002',
            'barang_nama' => 'Pasta Gigi',
            'harga_beli' => 6000,
            'harga_jual' => 9000,
        ],
    ];

    DB::table('m_barang')->insert($data);
}
}
