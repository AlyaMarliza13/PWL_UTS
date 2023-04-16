<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
             'name'=> 'fian',
             'username' => 'Administrator_1',
             'email' => 'fiansaputra100@gmail.com',
             'password' =>Hash::make('admin001'),
            ],
            [
             'name'=> 'alya',
             'username' => 'Administrator_2',
             'email' => 'alyamarlizakoesnanto03@gmail.com',
             'password' =>Hash::make('admin002'),
            ],
        ]);
    }
}
