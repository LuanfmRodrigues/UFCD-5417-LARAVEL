<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Quarto'],
            ['name' => 'Sala'],
            ['name' => 'Cozinha'],
            ['name' => 'Casa_de_banho'],
        ]);
    }
}
