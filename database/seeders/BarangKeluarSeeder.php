<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('barang_keluar')->insert([
            [
                'id_barang' => '111',
                'nama_barang' => 'Motherboard',
                'tgl_keluar' => '2024-11-12',
                'jml_keluar' => '2',
                'penerima' => '888',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => '222',
                'nama_barang' => 'Keyboard',
                'tgl_keluar' => '2024-11-12',
                'jml_keluar' => '2',
                'penerima' => '888',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
