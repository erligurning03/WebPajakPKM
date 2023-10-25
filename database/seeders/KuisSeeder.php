<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\KuisLevel;
use App\Models\KuisJawaban;
use App\Models\KuisSoal;


class KuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kuislevels = [
            ['nama_kuis' => 'Kuis level dasar', 'waktu_kuis' => 5],
            ['nama_kuis' => 'Kuis level menengah', 'waktu_kuis' => 10],
            ['nama_kuis' => 'Kuis level ahli', 'waktu_kuis' => 15],
        ];

        foreach ($kuislevels as $kuislevel) {
            KuisLevel::create($kuislevel);
        }

        $kuissoals = [
            ['no_soal' => 1, 'isi_soal' => 'isi soal pertama', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'penbahasan soal pertama', 'id_kuis' => 1],
            ['no_soal' => 2, 'isi_soal' => 'isi soal kedua', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'penbahasan soal kedua', 'id_kuis' => 1],
            ['no_soal' => 3, 'isi_soal' => 'isi soal ketiga', 'jawaban_soal' => 'C', 'pembahasan_soal' => 'penbahasan soal ketiga', 'id_kuis' => 1],
            ['no_soal' => 4, 'isi_soal' => 'isi soal keempat', 'jawaban_soal' => 'D', 'pembahasan_soal' => 'penbahasan soal keempat', 'id_kuis' => 1],
        ];

        foreach ($kuissoals as $kuissoal) {
            KuisSoal::create($kuissoal);
        }

        $kuisjawabans = [
            ['id_soal' => 1, 'opsi_jawaban' => 'A', 'isi_jawaban' => 'jawaban A'],
            ['id_soal' => 1, 'opsi_jawaban' => 'B', 'isi_jawaban' => 'jawaban B'],
            ['id_soal' => 1, 'opsi_jawaban' => 'C', 'isi_jawaban' => 'jawaban C'],
            ['id_soal' => 1, 'opsi_jawaban' => 'D', 'isi_jawaban' => 'jawaban D'],

            ['id_soal' => 2, 'opsi_jawaban' => 'A', 'isi_jawaban' => 'jawaban A'],
            ['id_soal' => 2, 'opsi_jawaban' => 'B', 'isi_jawaban' => 'jawaban B'],
            ['id_soal' => 2, 'opsi_jawaban' => 'C', 'isi_jawaban' => 'jawaban C'],
            ['id_soal' => 2, 'opsi_jawaban' => 'D', 'isi_jawaban' => 'jawaban D'],

            ['id_soal' => 3, 'opsi_jawaban' => 'A', 'isi_jawaban' => 'jawaban A'],
            ['id_soal' => 3, 'opsi_jawaban' => 'B', 'isi_jawaban' => 'jawaban B'],
            ['id_soal' => 3, 'opsi_jawaban' => 'C', 'isi_jawaban' => 'jawaban C'],
            ['id_soal' => 3, 'opsi_jawaban' => 'D', 'isi_jawaban' => 'jawaban D'],

            ['id_soal' => 4, 'opsi_jawaban' => 'A', 'isi_jawaban' => 'jawaban A'],
            ['id_soal' => 4, 'opsi_jawaban' => 'B', 'isi_jawaban' => 'jawaban B'],
            ['id_soal' => 4, 'opsi_jawaban' => 'C', 'isi_jawaban' => 'jawaban C'],
            ['id_soal' => 4, 'opsi_jawaban' => 'D', 'isi_jawaban' => 'jawaban D'],
        ];

        foreach ($kuisjawabans as $kuisjawaban) {
            KuisJawaban::create($kuisjawaban);
        }
    }
    // DB::table('kuis_level')->insert([
    //     'nama_kuis' => 'Kuis level dasar',
    //     'waktu_kuis' => 5,
    //  ]);
}
