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
        $this->call(ClienteSeeder::class);
        for ($i=1; $i <= 100; $i++) {
            factory(\App\Bike::class)->create(['cliente_id' => $i]);
            factory(\App\Bike::class)->create(['cliente_id' => $i]);
        }
    }
}
