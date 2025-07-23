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
        $this->call(InstructorSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(EnrollmentSeeder::class);
    }
}
