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
                'cover_konten'=>'ini cover berita 1',
                'judul_konten'=>'ini judul berita 1',
                'url_konten'=>'ini url berita 1',
                'deskripsi_konten'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, aspernatur?
                Distinctio nisi sequi sint quia aliquam provident commodi consectetur corporis.',
                'tipe_konten_id'=>'1',
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '2',
                'cover_konten'=>'ini cover berita 2',
                'judul_konten'=>'ini judul berita 2',
                'url_konten'=>'ini url berita 2',
                'deskripsi_konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus saepe dolore, repellendus facere assumenda.
                Harum nostrum modi quaerat, atque id eaque voluptates, totam quis, doloremque veritatis facere voluptatum possimus!',
                'tipe_konten_id'=>1,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '3',
                'cover_konten'=>'ini cover berita 3',
                'judul_konten'=>'ini judul berita 3',
                'url_konten'=>'ini url berita 3',
                'deskripsi_konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus saepe dolore, repellendus facere assumenda.
                Harum nostrum modi quaerat, atque id eaque voluptates, totam quis, doloremque veritatis facere voluptatum possimus!',
                'tipe_konten_id'=>1,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '4',
                'cover_konten'=>'ini cover podcast 1',
                'judul_konten'=>'ini judul podcast 1',
                'url_konten'=>'ini url podcast 1',
                'deskripsi_konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus saepe dolore, repellendus facere assumenda.
                Harum nostrum modi quaerat, atque id eaque voluptates, totam quis, doloremque veritatis facere voluptatum possimus!',
                'tipe_konten_id'=>2,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '5',
                'cover_konten'=>'ini cover podcast 2',
                'judul_konten'=>'ini judul podcast 2',
                'url_konten'=>'ini url podcast 2',
                'deskripsi_konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus saepe dolore, repellendus facere assumenda.
                Harum nostrum modi quaerat, atque id eaque voluptates, totam quis, doloremque veritatis facere voluptatum possimus!',
                'tipe_konten_id'=>2,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '6',
                'cover_konten'=>'ini cover podcast 3',
                'judul_konten'=>'ini judul podcast 3',
                'url_konten'=>'ini url podcast 2',
                'deskripsi_konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus saepe dolore, repellendus facere assumenda.
                Harum nostrum modi quaerat, atque id eaque voluptates, totam quis, doloremque veritatis facere voluptatum possimus!',
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
                'cover_konten'=>'ini cover tontonan 2',
                'judul_konten'=>'ini judul tontonan 2',
                'url_konten'=>'ini url tontonan 2',
                'deskripsi_konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus saepe dolore, repellendus facere assumenda.
                Harum nostrum modi quaerat, atque id eaque voluptates, totam quis, doloremque veritatis facere voluptatum possimus!',
                'tipe_konten_id'=>3,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '9',
                'cover_konten'=>'ini cover tontonan 3',
                'judul_konten'=>'ini judul tontonan 3',
                'url_konten'=>'ini url tontonan 3',
                'deskripsi_konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus saepe dolore, repellendus facere assumenda.
                Harum nostrum modi quaerat, atque id eaque voluptates, totam quis, doloremque veritatis facere voluptatum possimus!',
                'tipe_konten_id'=>3,
                'diupload_oleh'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id' => '10',
                'cover_konten'=>'ini cover tontonan 4',
                'judul_konten'=>'ini judul tontonan 3',
                'url_konten'=>'ini url tontonan 3',
                'deskripsi_konten'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus saepe dolore, repellendus facere assumenda.
                Harum nostrum modi quaerat, atque id eaque voluptates, totam quis, doloremque veritatis facere voluptatum possimus!',
                'tipe_konten_id'=>1,
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
