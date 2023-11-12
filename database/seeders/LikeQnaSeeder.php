<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeQnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('like_qnas')->insert(
        [
            'id' => 1,
            'id_qna' => 1,
            'user_id' => 1,
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'id' => 2,
            'id_qna' => 1,
            'user_id' =>2,
        ],
        [
            'id' => 3,
            'id_qna' => 2,
            'user_id' =>3,
        ],
    
    );
    }
}
