<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class BlogNewsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\Portfolio::factory(10)->create();


        Blog::create([
            'title'=>'Orwell - Organic Food Store and Healthy Shop',
            'price'=>100000,
            'body'=>'by Afracode in Retail',
            'image_path'=>'/afracode/assets/images/portfolio/1-1.jpg'
        ]);

        Blog::create([
            'title'=>'Eduline - Language School & Education HTML Template',
            'price'=>800000,
            'body'=>'by Afracode in Retail',
            'image_path'=>'/afracode/assets/images/portfolio/1-2.jpg'
        ]);

        Blog::create([
            'title'=>'Nuxt | ReactJS Creative Personal Portfolio Template',
            'price'=>5000000,
            'body'=>'by Afracode in Retail',
            'image_path'=>'/afracode/assets/images/portfolio/1-3.jpg'
        ]);
    }
}
