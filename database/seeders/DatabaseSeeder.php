<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Jairo Navez - Admin',
            'email' => 'admin@example.com',
            'flag_admin' => true,
            'password' => Hash::make('abc123'),
        ]);

        User::factory()->create([
            'name' => 'Jairo Navez - Cliente',
            'email' => 'cliente@example.com',
            'flag_admin' => false,
            'password' => Hash::make('abc123'),
        ]);

        $this->call([
            CategoriasSeeder::class,
            ProductosSeeder::class,
        ]);
    }
}
