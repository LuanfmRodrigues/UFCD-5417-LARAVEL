<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=30;$i++){
            DB::table('enrollments')->insert([
                'student_id' => rand(1,100),
                'course_id' => rand(1,5),
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }
    }
}
