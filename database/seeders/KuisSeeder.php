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
            ['nama_kuis' => 'KUIS LEVEL DASAR', 'waktu_kuis' => 20],
            ['nama_kuis' => 'KUIS LEVEL MENENGAH', 'waktu_kuis' => 25],
            ['nama_kuis' => 'KUIS LEVEL AHLI', 'waktu_kuis' => 30],
        ];

        foreach ($kuislevels as $kuislevel) {
            KuisLevel::create($kuislevel);
        }

        $kuissoals = [
            ['no_soal' => 1, 'isi_soal' => 'isi soal pertama', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal pertama', 'id_kuis' => 1],
            ['no_soal' => 2, 'isi_soal' => 'isi soal kedua', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal kedua', 'id_kuis' => 1],
            ['no_soal' => 3, 'isi_soal' => 'isi soal ketiga', 'jawaban_soal' => 'C', 'pembahasan_soal' => 'pembahasan soal ketiga', 'id_kuis' => 1],
            ['no_soal' => 4, 'isi_soal' => 'isi soal keempat', 'jawaban_soal' => 'D', 'pembahasan_soal' => 'pembahasan soal keempat', 'id_kuis' => 1],
            ['no_soal' => 5, 'isi_soal' => 'isi soal kelima', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal kelima', 'id_kuis' => 1],
            ['no_soal' => 6, 'isi_soal' => 'isi soal keenam', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal keenam', 'id_kuis' => 1],
            ['no_soal' => 7, 'isi_soal' => 'isi soal ketujuh', 'jawaban_soal' => 'C', 'pembahasan_soal' => 'pembahasan soal ketujuh', 'id_kuis' => 1],
            ['no_soal' => 8, 'isi_soal' => 'isi soal kedelapan', 'jawaban_soal' => 'D', 'pembahasan_soal' => 'pembahasan soal kedelapan', 'id_kuis' => 1],
            ['no_soal' => 9, 'isi_soal' => 'isi soal kesembilan', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal kesembilan', 'id_kuis' => 1],
            ['no_soal' => 10, 'isi_soal' => 'isi soal kesempuluh', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal kesempuluh', 'id_kuis' => 1],

            ['no_soal' => 1, 'isi_soal' => 'isi soal pertama', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal pertama', 'id_kuis' => 2],
            ['no_soal' => 2, 'isi_soal' => 'isi soal kedua', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal kedua', 'id_kuis' => 2],
            ['no_soal' => 3, 'isi_soal' => 'isi soal ketiga', 'jawaban_soal' => 'C', 'pembahasan_soal' => 'pembahasan soal ketiga', 'id_kuis' => 2],
            ['no_soal' => 4, 'isi_soal' => 'isi soal keempat', 'jawaban_soal' => 'D', 'pembahasan_soal' => 'pembahasan soal keempat', 'id_kuis' => 2],
            ['no_soal' => 5, 'isi_soal' => 'isi soal kelima', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal kelima', 'id_kuis' => 2],
            ['no_soal' => 6, 'isi_soal' => 'isi soal keenam', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal keenam', 'id_kuis' => 2],
            ['no_soal' => 7, 'isi_soal' => 'isi soal ketujuh', 'jawaban_soal' => 'C', 'pembahasan_soal' => 'pembahasan soal ketujuh', 'id_kuis' => 2],
            ['no_soal' => 8, 'isi_soal' => 'isi soal kedelapan', 'jawaban_soal' => 'D', 'pembahasan_soal' => 'pembahasan soal kedelapan', 'id_kuis' => 2],
            ['no_soal' => 9, 'isi_soal' => 'isi soal kesembilan', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal kesembilan', 'id_kuis' => 2],
            ['no_soal' => 10, 'isi_soal' => 'isi soal kesempuluh', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal kesempuluh', 'id_kuis' => 2],

            ['no_soal' => 1, 'isi_soal' => 'isi soal pertama', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal pertama', 'id_kuis' => 3],
            ['no_soal' => 2, 'isi_soal' => 'isi soal kedua', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal kedua', 'id_kuis' => 3],
            ['no_soal' => 3, 'isi_soal' => 'isi soal ketiga', 'jawaban_soal' => 'C', 'pembahasan_soal' => 'pembahasan soal ketiga', 'id_kuis' => 3],
            ['no_soal' => 4, 'isi_soal' => 'isi soal keempat', 'jawaban_soal' => 'D', 'pembahasan_soal' => 'pembahasan soal keempat', 'id_kuis' => 3],
            ['no_soal' => 5, 'isi_soal' => 'isi soal kelima', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal kelima', 'id_kuis' => 3],
            ['no_soal' => 6, 'isi_soal' => 'isi soal keenam', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal keenam', 'id_kuis' => 3],
            ['no_soal' => 7, 'isi_soal' => 'isi soal ketujuh', 'jawaban_soal' => 'C', 'pembahasan_soal' => 'pembahasan soal ketujuh', 'id_kuis' => 3],
            ['no_soal' => 8, 'isi_soal' => 'isi soal kedelapan', 'jawaban_soal' => 'D', 'pembahasan_soal' => 'pembahasan soal kedelapan', 'id_kuis' => 3],
            ['no_soal' => 9, 'isi_soal' => 'isi soal kesembilan', 'jawaban_soal' => 'A', 'pembahasan_soal' => 'pembahasan soal kesembilan', 'id_kuis' => 3],
            ['no_soal' => 10, 'isi_soal' => 'isi soal kesempuluh', 'jawaban_soal' => 'B', 'pembahasan_soal' => 'pembahasan soal kesempuluh', 'id_kuis' => 3],

        ];

        foreach ($kuissoals as $kuissoal) {
            KuisSoal::create($kuissoal);
        }

        $kuisJawabans = [];

        for ($i = 1; $i <= 30; $i++) {
            // For each $i, create four rows for options A, B, C, and D
            $kuisJawabans[] = [
                'id_soal' => $i,
                'opsi_jawaban' => 'A',
                'isi_jawaban' => 'jawaban A',
            ];

            $kuisJawabans[] = [
                'id_soal' => $i,
                'opsi_jawaban' => 'B',
                'isi_jawaban' => 'jawaban B',
            ];

            $kuisJawabans[] = [
                'id_soal' => $i,
                'opsi_jawaban' => 'C',
                'isi_jawaban' => 'jawaban C',
            ];

            $kuisJawabans[] = [
                'id_soal' => $i,
                'opsi_jawaban' => 'D',
                'isi_jawaban' => 'jawaban D',
            ];
        }

        foreach ($kuisJawabans as $kuisJawaban) {
            KuisJawaban::create($kuisJawaban);
        }
    }
    // DB::table('kuis_level')->insert([
    //     'nama_kuis' => 'Kuis level dasar',
    //     'waktu_kuis' => 5,
    //  ]);
}
