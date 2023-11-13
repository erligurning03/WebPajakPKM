<?php

namespace Database\Seeders;

use App\Http\Controllers\Konten_controller;
use App\Models\Konten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Konten_seeder extends Seeder
{

    public function run(): void
    {
        $dataMigrate = [
            [
                //id_tipe_konten 1 itu berita
                //id_tipe_konten 2 itu podcast
                //id_tipe_konten 3 itu tontonan
                //link folder gdrive isi konten(https://drive.google.com/drive/folders/18fc1xxBVnXx_3N_tU-fjPtDxOXUieFwW?usp=sharing)
                //link folder gdrive cover konten (https://drive.google.com/drive/folders/1c3uiWZo0EQI8XamvrwZgqnAO7QKE5tNT?usp=sharing)
                //cara buat seeder untuk cover sama isi konten, copy link tiap gambar,video,mp3 yang ada dalam folder ke field cover konten sama isi konten
                'id' => '1',
                'cover_konten'=>'https://drive.google.com/file/d/1DB70khhaGw4XnLqpgAVS7_IYV89yXXns/view?usp=sharing',
                'judul_konten'=>'OPINI:Pajak dan Pemilu',
                'url_konten'=>'https://drive.google.com/file/d/1DB70khhaGw4XnLqpgAVS7_IYV89yXXns/view?usp=sharing',
                'deskripsi_konten'=> 'Bagi sebagian masyarakat, isu perpajakan mungkin terdengar kompleks, tetapi di balik kompleksitasnya tersirat berbagai harapan tentang keadilan, transparansi, dan keberlanjutan ekonomi. Isu perpajakan bukan hanya sekadar diskusi mengenai cara mengumpulkan pendapatan negara, lebih daripada itu ia merupakan refleksi dari integritas pemerintah, tak terkecuali para capres yang berlomba untuk mendapatkan dukungan masyarakat.
                Banyak persoalan perpajakan yang harus dihadapi oleh pemimpin bangsa yang akan terpilih pada Pemilu 2024. Persoalan mengenai rendahnya rasio pajak, rendahnya tax awareness, serta jauhnya nilai-nilai tax equity mutlak jadi pekerjaan rumah yang kudu mereka hadapi',
                'tipe_konten_id'=>'1',
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '2',
                'cover_konten'=>'https://drive.google.com/file/d/1DB70khhaGw4XnLqpgAVS7_IYV89yXXns/view?usp=sharing',
                'judul_konten'=>'OPINI:Pajak dan Pemilu',
                'url_konten'=>'https://drive.google.com/file/d/1DB70khhaGw4XnLqpgAVS7_IYV89yXXns/view?usp=sharing',
                'deskripsi_konten'=> 'Bagi sebagian masyarakat, isu perpajakan mungkin terdengar kompleks, tetapi di balik kompleksitasnya tersirat berbagai harapan tentang keadilan, transparansi, dan keberlanjutan ekonomi. Isu perpajakan bukan hanya sekadar diskusi mengenai cara mengumpulkan pendapatan negara, lebih daripada itu ia merupakan refleksi dari integritas pemerintah, tak terkecuali para capres yang berlomba untuk mendapatkan dukungan masyarakat.
                Banyak persoalan perpajakan yang harus dihadapi oleh pemimpin bangsa yang akan terpilih pada Pemilu 2024. Persoalan mengenai rendahnya rasio pajak, rendahnya tax awareness, serta jauhnya nilai-nilai tax equity mutlak jadi pekerjaan rumah yang kudu mereka hadapi',
                'tipe_konten_id'=>'1',
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '3',
                'cover_konten'=>'https://drive.google.com/file/d/1DB70khhaGw4XnLqpgAVS7_IYV89yXXns/view?usp=sharing',
                'judul_konten'=>'OPINI:Pajak dan Pemilu',
                'url_konten'=>'https://drive.google.com/file/d/1DB70khhaGw4XnLqpgAVS7_IYV89yXXns/view?usp=sharing',
                'deskripsi_konten'=> 'Bagi sebagian masyarakat, isu perpajakan mungkin terdengar kompleks, tetapi di balik kompleksitasnya tersirat berbagai harapan tentang keadilan, transparansi, dan keberlanjutan ekonomi. Isu perpajakan bukan hanya sekadar diskusi mengenai cara mengumpulkan pendapatan negara, lebih daripada itu ia merupakan refleksi dari integritas pemerintah, tak terkecuali para capres yang berlomba untuk mendapatkan dukungan masyarakat.
                Banyak persoalan perpajakan yang harus dihadapi oleh pemimpin bangsa yang akan terpilih pada Pemilu 2024. Persoalan mengenai rendahnya rasio pajak, rendahnya tax awareness, serta jauhnya nilai-nilai tax equity mutlak jadi pekerjaan rumah yang kudu mereka hadapi',
                'tipe_konten_id'=>'1',
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '4',
                'cover_konten'=>'https://drive.google.com/file/d/1FAEmdoXRMj53VhCFGsF1emv6yUKK4qqB/view?usp=sharing',
                'judul_konten'=>'Hanyalah Sebuah Tes Konten',
                'url_konten'=>'https://drive.google.com/file/d/1A1ZociUhWcJtFrwF2Fhj2q5AMIjRcZKd/view?usp=sharing',
                'deskripsi_konten'=> 'Deskripsi Konten Podcast',
                'tipe_konten_id'=>2,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '5',
                'cover_konten'=>'https://drive.google.com/file/d/1FAEmdoXRMj53VhCFGsF1emv6yUKK4qqB/view?usp=sharing',
                'judul_konten'=>'Hanyalah Sebuah Tes Konten',
                'url_konten'=>'https://drive.google.com/file/d/1A1ZociUhWcJtFrwF2Fhj2q5AMIjRcZKd/view?usp=sharing',
                'deskripsi_konten'=> 'Deskripsi Konten Podcast',
                'tipe_konten_id'=>2,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '6',
                'cover_konten'=>'https://drive.google.com/file/d/1FAEmdoXRMj53VhCFGsF1emv6yUKK4qqB/view?usp=sharing',
                'judul_konten'=>'Hanyalah Sebuah Tes Konten',
                'url_konten'=>'https://drive.google.com/file/d/1A1ZociUhWcJtFrwF2Fhj2q5AMIjRcZKd/view?usp=sharing',
                'deskripsi_konten'=> 'Deskripsi Konten Podcast',
                'tipe_konten_id'=>2,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '7',
                'cover_konten'=>'https://drive.google.com/file/d/1cuzwA876fkaFQxD0BquDMaLHheMgo4ON/view?usp=sharing',
                'judul_konten'=>'Bagaimana Cara Melapor Pajak',
                'url_konten'=>'https://drive.google.com/file/d/1n1EzNOZE9Uq-Frn7J90TxIQ6ePI_xEmH/view?usp=sharing',
                'deskripsi_konten'=> 'Video diatas menjelaskan tentang bagaimana cara melapor pajak',
                'tipe_konten_id'=>3,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '8',
                'cover_konten'=>'https://drive.google.com/file/d/1o-2p2d47bwhWDyNVBW8A22H1c3BEMG1M/view?usp=sharing',
                'judul_konten'=>'Penggunaan NIK Menjadi NPWP',
                'url_konten'=>'https://drive.google.com/file/d/1Ykm6px6mW_oUlj9gWCmdi_uE97ANHcBT/view?usp=sharing',
                'deskripsi_konten'=> 'penggunaan NIK menjadi NPWP',
                'tipe_konten_id'=>3,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '9',
                'cover_konten'=>'https://drive.google.com/file/d/1AP_TtHxW70aeVitPuBkgNsThFarAadE4/view?usp=sharing',
                'judul_konten'=>'Welcome Video',
                'url_konten'=>'https://drive.google.com/file/d/1wZ4OrWRBNYCaMUm_r62e9Jx4BTdgCVKq/view?usp=sharing',
                'deskripsi_konten'=> 'Perkenalan Konten Website',
                'tipe_konten_id'=>3,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ];

        $dataMigrate = collect($dataMigrate)->map(function($item) {
            $controller = new Konten_controller();
            $item['cover_konten'] = $controller->isGoogleDrivePath($item['cover_konten']) ? $controller->getIdFormGoogleDriveUrl($item['cover_konten']) : $item['cover_konten'];
            $item['url_konten'] = $controller->isGoogleDrivePath($item['url_konten']) ? $controller->getIdFormGoogleDriveUrl($item['url_konten']) : $item['url_konten'];
            return $item;
        })->toArray();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('kontens')->truncate();
        DB::table('kontens')->insert($dataMigrate);
    }
    public function down(): void
    {
        Schema::dropIfExists('kontens');
    }
}
