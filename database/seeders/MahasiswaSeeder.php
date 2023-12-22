<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mahasiswas')->insert([
            'npm' => "1111",
            'nama' => 'Mahasiswa10',
            'alamat' => 'Padang',
            'no_hp' => '08122222',
        ]);
    }
}
