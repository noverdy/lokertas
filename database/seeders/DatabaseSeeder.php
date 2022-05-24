<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Dummy User',
            'username' => 'dummyuser',
            'email' => 'dummy@gmail.com',
            'address' => 'Dummy Address',
            'date_of_birth' => Carbon::now(),
            'place_of_birth' => 'Dummy Place',
            'password' => Hash::make('password')
        ]);

        \App\Models\Company::create([
            'name' => 'Dummy Company',
            'username' => 'dummycomp',
            'email' => 'support@dummy.com',
            'address' => 'Dummy Address',
            'password' => Hash::make('password')
        ]);

        \App\Models\User::factory(9)->create();
        \App\Models\Company::factory(9)->create();
        \App\Models\Vacancy::factory(101)->create();
    }
}
