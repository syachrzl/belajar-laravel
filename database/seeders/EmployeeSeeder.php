<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
            [
                'name' => 'Moch. Hatta',
                'gender' => 'Male',
                'no_hp' => '081118948190'
            ],
            [
                'name' => 'Puan Maharani',
                'gender' => 'Female',
                'no_hp' => '08217367891'
            ],
            [
                'name' => 'Megawati',
                'gender' => 'Female',
                'no_hp' => '081234567890'
            ]
        );
    }
}
