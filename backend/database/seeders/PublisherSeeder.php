<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('publishers')->insert([
            ['name' => 'Gramedia', 'alamat' => 'Jakarta', 'website' => 'https://gramedia.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mizan', 'alamat' => 'Bandung', 'website' => 'https://mizan.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}