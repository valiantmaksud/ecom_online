<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::firstOrCreate([
            'created_by' => 1,
            'name'          => 'Company 1',
            'email'         => 'company@gmail.com',
            'phone'         => '0123456789',
            'address'       => 'Dhaka',
            'logo'          => 'logo.png',
            'hotline'       => '0123456789',
            'tax_number'    => '0123456789',
        ]);
    }
}
