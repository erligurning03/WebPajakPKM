<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarQnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komentar_qnas')->insert([
            [
                'id' => 1,
                'id_qna' => 1,
                'user_id' => 1,
                'isi_komentar' => 'PPN adalah pungutan yang dikenakan dalam setiap proses produksi maupun distribusi.',
                // 'created_at' => date('Y-m-d H:i:s'),
                // 'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'id_qna' => 1,
                'user_id' => 2,
                'isi_komentar' => 'PPN adalah pajak yang dikenakan pada barang dan jasa di banyak negara di seluruh dunia, termasuk Indonesia',
            ],
            [
                'id' => 3,
                'id_qna' => 2,
                'user_id' => 3,
                'isi_komentar' => 'NPWP adalah nomor yang diberikan kepada Wajib Pajak sebagai sarana dalam administrasi perpajakan yang dipergunakan sebagai tanda pengenal diri atau identitas Wajib Pajak dalam melaksanakan hak dan kewajiban perpajakannya',
            ],
        ]);
    }
}
