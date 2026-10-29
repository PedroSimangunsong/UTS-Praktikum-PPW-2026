<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Elektronik',
                'code' => 'ELK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Peralatan Laboratorium',
                'code' => 'LAB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Peralatan Jaringan',
                'code' => 'JAR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
