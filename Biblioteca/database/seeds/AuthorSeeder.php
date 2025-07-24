<?php

use Illuminate\Database\Seeder;
use App\author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\author::class,20)->create();
    }
}
