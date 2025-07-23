<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Portugal'],
            ['name' => 'Espanha'],
            ['name' => 'Brasil'],
            ['name' => 'Mexico'],
        ]);

    }
}
