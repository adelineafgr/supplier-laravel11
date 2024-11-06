<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangMasukSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang' => '111',
                'nama_barang' => 'Motherboard',
                'tgl_masuk' => '2024-11-06',
                'jml_masuk' => '10',
                'id_suplier' => '888',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => '222',
                'nama_barang' => 'Keyboard',
                'tgl_masuk' => '2024-11-06',
                'jml_masuk' => '10',
                'id_suplier' => '888',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
