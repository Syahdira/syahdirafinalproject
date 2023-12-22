<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('dosens')->insert([
            'nidn' => "1010",
            'nama' => 'Dosen12',
            'alamat' => 'Padang',
            'no_hp' => '0812121212',
        ]);
    }
}
