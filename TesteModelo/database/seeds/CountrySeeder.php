<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['nome' => 'Brasil'],
            ['nome' => 'Espanha'],
            ['nome' => 'Polonia'],
            ['nome' => 'França']

        ]);
    }
}
