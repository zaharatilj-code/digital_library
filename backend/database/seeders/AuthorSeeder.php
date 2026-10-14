<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['nama' => 'Tere Liye', 'bio' => 'Penulis novel', 'tanggal_lahir' => '1979-05-21', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Andrea Hirata', 'bio' => 'Penulis Laskar Pelangi', 'tanggal_lahir' => '1967-10-24', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}