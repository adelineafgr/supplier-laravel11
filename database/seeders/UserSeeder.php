<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'id_user' => '123',
                'nama' => 'Admin',
                'username' => 'admin',
                'password' => 'admin',
                'level' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => '444',
                'nama' => 'Petugas Gudang',
                'username' => 'gudang444',
                'password' => 'gudang444',
                'level' => 'petugas_gudang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => '999',
                'nama' => 'User001',
                'username' => 'user',
                'password' => 'user',
                'level' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
