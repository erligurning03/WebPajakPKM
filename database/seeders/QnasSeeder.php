<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QnasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('qnas')->insert([
            [
                'id' => '1',
                'user_id' => '1',
                'isi_pertanyaan' => 'apa yang dimaksud dengan PPN? ',
                'jumlah_like' => 10,
                'jumlah_komentar' => 5,
                'jumlah_share' => 6,
                'tanggal_upload' =>now(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'user_id' => '2',
                'isi_pertanyaan' => 'apa yang dimaksud dengan NPWP? ',
                'jumlah_like' => 43,
                'jumlah_komentar' => 2,
                'jumlah_share' => 4,
                'tanggal_upload' =>now(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'user_id' => '3',
                'isi_pertanyaan' => 'Bagaimana cara mengurus NPWP secara online? ',
                'jumlah_like' => 20,
                'jumlah_komentar' => 4,
                'jumlah_share' => 5,
                'tanggal_upload' =>now(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
