<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'email' => 'admin@gmail.com',
            ],
            [
                'name'      => "Admin",
                'username'  => "admin",
                'mobile'    => '01611223344',
                'password'  => Hash::make('admin12345'),
                'type'      => 'admin',
            ]
        );
        User::firstOrCreate(
            [
                'email' => 'ekram@gmail.com',
            ],
            [
                'name'      => "Ekram Hasan",
                'username'  => "ekram",
                'mobile'    => '01813905258',
                'password'  => Hash::make('eh12345'),
                'type'      => 'admin',
            ]
        );
    }
}
