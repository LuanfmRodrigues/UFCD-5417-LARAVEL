<?php

use App\Crud;
use Illuminate\Database\Seeder;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  // 2º passo - criar as fakes das quantidades das tabelas prestar atenção nas seedes
     * @return void
     */
    public function run()
    {
        factory(Crud::class, 50)->create();
    }
}
