<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Luan Rodrigues',
            'email' => 'email@email.com',
            'password' => bcrypt('secret')
        ]);

        factory(\App\User::class,500)->create();
    }
}
