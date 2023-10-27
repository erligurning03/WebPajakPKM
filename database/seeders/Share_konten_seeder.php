<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Share_konten_seeder extends Seeder
{

    public function run(): void
    {
        $share_konten = DB::table('share_kontens')->insertGetId([
            'konten_id'=>1,
            'dibagikan_oleh'=>1,
        ]);
    }
}
