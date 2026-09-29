<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Ekstrakurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // // User::factory(10)->create();

    //     // User::factory()->create([
    //     //     'name' => 'Test User',
    //     //     'email' => 'test@example.com',
    //     // ]);

        
    // }

    public function run(): void
    {
        // Daftarkan JurusanSeeder di sini
        $this->call([
            EkstrakurikulerSeeder::class,
            // Anda bisa menambahkan seeder lain di bawah ini, dipisahkan dengan koma
            // UserSeeder::class,
        ]);
    }
}
