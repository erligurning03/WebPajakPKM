<?php

namespace Database\Seeders;

use App\Models\Konten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Konten_seeder extends Seeder
{

    public function run(): void
    {
        // DB::beginTransaction();
        // try {
            $konten = DB::table('kontens')->insertGetId([
                'cover_konten'=>'ini cover konten',
                'judul_konten'=>'ini judul konten',
                'url_konten'=>'ini url konten',
                'deskripsi_konten'=>'ini deskripsi konten',
                'tipe_konten_id'=>1,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
            // DB::commit();
            // dd($konten);
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        // }
    }
}
