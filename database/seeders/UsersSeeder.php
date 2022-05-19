<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'adminperpus',
            'role' => 'admin',
            'email' => 'admin@univ.com',
            'password' => bcrypt('password123')
        ]);

        DB::table('users')->insert([
            'name' => 'Agan Saputra',
            'role' => 'pengunjung',
            'pengunjung_id' => 1,
            'email' => 'agan@student.com',
            'password' => bcrypt('agan123')
        ]);

        DB::table('users')->insert([
            'name' => ' Bos Kaido',
            'role' => 'pengunjung',
            'pengunjung_id' => 2,
            'email' => 'kaido@student.com',
            'password' => bcrypt('kaido')
        ]);
    }
}
