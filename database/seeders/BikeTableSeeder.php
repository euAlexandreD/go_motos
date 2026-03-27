<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bike')->insert([
            [
                'Model' => 'CG 160',
                'Mark' => 'Honda',
                'year' => '2017',
                'km' => '25000',
                'price' => '15000',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'Model' => 'factor',
                'Mark' => 'Yamaha',
                'year' => '2017',
                'km' => '25000',
                'price' => '15000',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
