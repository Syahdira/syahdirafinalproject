<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
       $this->call([
        DosensSeeder::class,
        MahasiswaSeeder::class,
        MatakuliahSeeder::class,
        RelationSeeder::class,
        UserSeeder::class,
        ]);

    }
}
