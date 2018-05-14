<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'adm',
            'email'    => 'adm@adm.com',
            'password' => bcrypt('123')
        ]);
    }
}
