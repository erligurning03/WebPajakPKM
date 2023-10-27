<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        $this->call(UserSeeder::class);
=======
=======
>>>>>>> 3d85955de58ac3c5051cb05728081ea329577e0e
        User::factory(10)->create();
        $this->call(TipeKontenSeeder::class);
        $this->call(Konten_seeder::class);
        $this->call(Komentar_konten_seeder::class);
        $this->call(Like_konten_seeder::class);
        $this->call(Share_konten_seeder::class);
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> 3d85955de58ac3c5051cb05728081ea329577e0e
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< Updated upstream
=======
>>>>>>> 3d85955de58ac3c5051cb05728081ea329577e0e
>>>>>>> Stashed changes
    }
}
