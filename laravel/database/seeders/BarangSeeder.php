<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_barang')->insert(
            array(
                array(
                    'foto'  => '',
                    'nama'  => 'Barang Pertama',
                    'description'   => 'Lorem ipsum dolor sit amet',
                    'harga' => 1000,
                    'rating'    => 5,
                    'stok'  => 10,
                    'created_at'    => date('Y-m-d'),
                    'updated_at'    => date('Y-m-d'),
                ),
                array(
                    'foto'  => '',
                    'nama'  => 'Barang Kedua',
                    'description'   => 'Lorem ipsum dolor sit amet',
                    'harga' => 2000,
                    'rating'    => 5,
                    'stok'  => 10,
                    'created_at'    => date('Y-m-d'),
                    'updated_at'    => date('Y-m-d'),
                ),
            )
        );
    }
}
