<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('persons')->insert([
            'name' => 'Alicia Louise',
            'birth_date' => '2022-02-02',
            'email' => 'email@email.com'
        ]);
        factory(\App\Person::class,400)->create();
    }
}
