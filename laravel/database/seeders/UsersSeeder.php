<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'nama' => 'Admin',
                'email' => 'admin@jongkoding.id',
                'email_verified_at' => date('Y-m-d'),
                'password' => hash('sha256', 'admin'),
                'created_at'    => date('Y-m-d'),
                'updated_at'    => date('Y-m-d'),
            ),
        ));
    }
}
