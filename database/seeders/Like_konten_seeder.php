<?php

namespace Database\Seeders;

use App\Models\Like_konten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Like_konten_seeder extends Seeder
{
    public function run(): void
    {
        $like_konten = DB::table('like_kontens')->insertGetId([
            'konten_id'=>1,
            'disukai_oleh'=>1,
        ]);
    }
}
