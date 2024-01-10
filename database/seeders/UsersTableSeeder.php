<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User 1
        DB::table('users')->insert([
            'name' => 'Khalid Fadlilah',
            'email' => 'khalid@gmail.com',
            'password' => Hash::make('qweasd123'),
            'role' => 'management',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // User 2
        DB::table('users')->insert([
            'name' => 'Agung Dwi Sahputra',
            'email' => 'agungdwisahputra@gmail.com',
            'password' => Hash::make('qweasd123'),
            'role' => 'ops',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
