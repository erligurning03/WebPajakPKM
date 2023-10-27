<?php

namespace Database\Seeders;

use App\Models\Komentar_konten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Komentar_konten_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $komentar_konten = DB::table('komentar_kontens')->insertGetId([
            'konten_id'=>1,
            'dikomentari_oleh'=>2,
            'isi_komentar'=> 'ini adalah isi komentar',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
