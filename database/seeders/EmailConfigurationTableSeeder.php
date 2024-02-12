<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmailConfiguration;

class EmailConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmailConfiguration::firstOrCreate([
            "driver"        =>      'smtp',
            "host"          =>      'smtp.gmail.com',
            "port"          =>      '587',
            "encryption"    =>      'LTS',
            "user_name"     =>      'admin@gmail.com',
            "password"      =>      '12345678',
            "sender_name"   =>      'Test',
            "sender_email"  =>      'admin@gmail.com'
        ]);
    }
}
