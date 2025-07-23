<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(UserSeeder::class);
        for ($i=1; $i <= 100; $i++){
            factory(\App\Bicycle::Class)->create(['user_id' => $i]);
            factory(\App\Bicycle::Class)->create(['user_id' => $i]);
        }
    }
}
