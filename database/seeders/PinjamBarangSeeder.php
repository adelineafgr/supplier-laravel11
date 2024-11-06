<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamBarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pinjam_barang')->insert([
            [
                'id_pinjam' => '111',
                'peminjam' => 'Superman',
                'tgl_pinjam' => '2024-10-11',
                'id_barang' => '111',
                'nama_barang' => 'Motherboard',
                'jml_barang' => '2',
                'tgl_kembali' => '2024-10-15',
                'kondisi' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
