<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('people')->insert([
            'name' => 'Alicia Louise',
            'birth_date' => '2022-02-02',
            'email' => 'Alicial@email.com'
        ]);
        factory(\App\Person::class,400)->create();
    }
}
