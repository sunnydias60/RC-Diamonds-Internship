<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name'=> 'sun',
            'email'=>'sun@gmail.com',
            'password'=>'pass',
            'avatar'=> 'ava'
        ],[
            'name'=> 'bun',
            'email'=>'sun1@gmail.com',
            'password'=>'pass',
            'avatar'=> 'avb'
        ],[
            'name'=> 'fun',
            'email'=>'sun2@gmail.com',
            'password'=>'pass',
            'avatar'=> 'avc'
        ]

        ]);
    }
}
