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
       
        DB::table('users')->insert([
            'id' => '1',
            'usuario' => 'rafael',
            'condicion' => '1',
            'idrol' => '1',
            'password' => bcrypt('rafael'),
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'usuario' => 'laboral123',
            'condicion' => '1',
            'idrol' => '2',
            'password' => bcrypt('laboral123'),
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'usuario' => 'abc123',
            'condicion' => '1',
            'idrol' => '3',
            'password' => bcrypt('abc123'),
        ]);
        DB::table('users')->insert([
            'id' => '4',
            'usuario' => 'ambiental123',
            'condicion' => '1',
            'idrol' => '4',
            'password' => bcrypt('ambiental123'),
        ]);
        DB::table('users')->insert([
            'id' => '5',
            'usuario' => 'todos123',
            'condicion' => '1',
            'idrol' => '5',
            'password' => bcrypt('todos123'),
        ]);
    }
}
