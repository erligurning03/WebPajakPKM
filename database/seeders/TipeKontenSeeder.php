<?php

namespace Database\Seeders;

use App\Models\TipeKonten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeKontenSeeder extends Seeder
{

    public function run(): void
    {
        TipeKonten::insert([
            [
                'tipe_konten' => 'berita',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'tipe_konten' => 'podcast',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'tipe_konten' => 'tontonan',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
