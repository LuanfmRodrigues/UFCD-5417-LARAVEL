<?php

use Illuminate\Database\Seeder;
use App\instructor;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Instructor::class,5)->create();
    }
}
