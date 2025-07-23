<?php

use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pets')->insert([

            'name' => 'Manu Manuela',
            'color' => 'black, white and craem',
            'birth_date' => '2020-02-19',
            'person_id' => rand(1,400),

        ]);

        factory(\App\Pet::class,400)->create();
    }
}
