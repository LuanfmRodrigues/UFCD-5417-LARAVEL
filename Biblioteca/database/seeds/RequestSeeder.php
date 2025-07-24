<?php

use Illuminate\Database\Seeder;
use App\Request;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Request::class,40)->create();
    }
}
