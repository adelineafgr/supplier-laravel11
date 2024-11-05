<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class SuplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('suplier')->insert([
            [
                'id_suplier' => '999',
                'nama_suplier' => 'PT Jaya Sempurna',
                'alamat_suplier' => 'Tebet',
                'telp_suplier' => '0812678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_suplier' => '888',
                'nama_suplier' => 'PT Elektronik Indonesia',
                'alamat_suplier' => 'Cikarang',
                'telp_suplier' => '0812678345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_suplier' => '777',
                'nama_suplier' => 'PT Maju Jaya',
                'alamat_suplier' => 'Bekasi',
                'telp_suplier' => '08945678874',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_suplier' => '666',
                'nama_suplier' => 'PT Beton Indonesia Maju',
                'alamat_suplier' => 'Cilegon',
                'telp_suplier' => '08123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
