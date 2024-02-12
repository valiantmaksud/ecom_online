<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }

    private function data()
    {
        return [
            ['name'     => 'Dhaka'],
            ['name'     => 'Chittagong'],
            ['name'     => 'Barisal'],
            ['name'     => 'Sylhet'],
            ['name'     => 'Rajshahi'],
            ['name'     => 'Khulna'],
            ['name'     => 'Rangpur'],
            ['name'     => 'Mymensingh'],
        ];
    }
}
