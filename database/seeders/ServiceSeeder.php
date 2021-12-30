<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\Portfolio::factory(10)->create();


        Service::create([
            'title'=>'Orwell - Organic ',
            'icon'=>"ti-mobile",
            'description'=>'by Afracode in Retail',
            'image_path'=>'/afracode/assets/images/illustrations/1.svg'
        ]);

        Service::create([
            'title'=>'Eduline - Language ',
            'icon'=>"ti-mobile",
            'description'=>'by Afracode in Retail',
            'image_path'=>'/afracode/assets/images/illustrations/1.svg'
        ]);

        Service::create([
            'title'=>'Nuxt | ReactJS ',
            'icon'=>"ti-mobile",
            'description'=>'by Afracode in Retail',
            'image_path'=>'/afracode/assets/images/illustrations/1.svg'
        ]);
    }
}
