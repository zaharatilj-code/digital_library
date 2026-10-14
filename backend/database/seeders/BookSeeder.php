<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['judul' => 'Laskar Pelangi', 'author_id' => 2, 'publisher_id' => 1, 'isbn' => '9789793062792', 'tahun_terbit' => 2005, 'kategori' => 'Novel', 'jumlah_stok' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Bumi Manusia', 'author_id' => 1, 'publisher_id' => 2, 'isbn' => '9789799731234', 'tahun_terbit' => 1980, 'kategori' => 'Sejarah', 'jumlah_stok' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}