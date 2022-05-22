<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Akun admin 1
        DB::table('users')->insert([
            'name' => 'Faiz Dzakirullail',
            'email' => 'faiz@gmail.com',
            'password' =>Hash::make('12345'),
            'nim' =>'2008107010063',
            'level' =>'Admin',
        ]);

        // Akun admin 2
        DB::table('users')->insert([
            'name' => 'Yulia',
            'email' => 'yuliakh@gmail.com',
            'password' =>Hash::make('54321'),
            'nim' =>'2008107010010',
            'level' =>'Admin',

        ]);
    }
}
