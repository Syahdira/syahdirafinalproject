<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('matakuliahs')->insert([
            'kode_mk' => "1212",
            'nama_mk' => 'Mobile Computing',
            'sks' => '4',
            'semester' => 'ganjil',
        ]);
    }
}
