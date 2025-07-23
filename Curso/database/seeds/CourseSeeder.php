<?php

use App\Instructor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['Engenharia de Software', 'Análise de Dados', 'Segurança de Dados', 'TI','Redes Avançadas'];

        foreach ($titles as $title) {
            DB::table('courses')->insert([
                'title' => $title,
                'description' => Str::random(100),
                'instructor_id' => rand(1,5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
