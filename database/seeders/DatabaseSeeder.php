<?php

namespace Database\Seeders;

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
//         \App\Models\Service::factory(10)->create();


        $this->call([ServiceSeeder::class]);
        $this->call([PortfolioSeeder::class]);
        $this->call([portfolioDetailSeeder::class]);


    }
}
