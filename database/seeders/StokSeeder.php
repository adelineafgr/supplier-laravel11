<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('stok')->insert([
            [
                'id_barang' => '111',
                'nama_barang' => 'Motherboard',
                'jml_masuk' => '10',
                'jml_keluar' => '2',
                'total_barang' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => '222',
                'nama_barang' => 'Keyboard',
                'jml_masuk' => '10',
                'jml_keluar' => '2',
                'total_barang' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => '333',
                'nama_barang' => 'Kertas',
                'jml_masuk' => '10',
                'jml_keluar' => '2',
                'total_barang' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
