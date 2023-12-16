<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\City;
use App\Models\Company;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
        Company::factory(10)->create();
        City::factory(10)->create();
        Project::factory(10)->create();

        // Creacion 1 un User con datos establecidos
        User::create([
            'name'      => 'Maxi Jayme',
            'email'     => 'maxi@gmail.com',
            'password'  =>  bcrypt('123456')
        ]);

    }
}
