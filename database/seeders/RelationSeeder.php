<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('relations')->insert([
            'mahasiswa_npm' => "1111",
            'dosen_nidn' => '1010',
            'matakuliah_kode' => '1212',
            'status_aktif' => 'Y',
        ]);
    }
}
