<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    use WithOutModelEvents;

    public function run(): void
    {
        // User::factory(10)->create();

     

        //Create detault user, role admin

        User::create([
            'name' => 'Hendra Permadi',
            'email' => 'permadi@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'balance' => 5000,
        ]);

        $this->call([
            ProductSeeder::class,
        ]);

    }
}
