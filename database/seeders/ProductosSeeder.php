<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            ['categoria_id' => 1, 'nombre' => 'Smartphone', 'stock' => 50, 'precio' => 500],
            ['categoria_id' => 1, 'nombre' => 'Auriculares', 'stock' => 100, 'precio' => 90],
            ['categoria_id' => 2, 'nombre' => 'Camisa', 'stock' => 75, 'precio' => 145],
            ['categoria_id' => 3, 'nombre' => 'Pan', 'stock' => 200, 'precio' => 2],
        ]);
    }
}
