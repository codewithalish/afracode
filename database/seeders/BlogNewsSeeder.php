<?php

namespace Database\Seeders;

use App\Models\BlogNews;
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


        BlogNews::create([
            'title'=>'Blogging for business? Here’s everything you need to know.',
            'body'=>'Although COVID-19 has created a lot of problems around the world, it has provided a great opportunity for people to enhance their knowledge',
            'image_path'=>'/afracode/assets/images/blog/1-1.jpg',
            'author_image'=>'/afracode/assets/images/people/1.jpg',
            'author_name'=>'Teams'
        ]);

        BlogNews::create([
            'title'=>'Eduline - Language School & Education HTML Template',
            'body'=>'Although COVID-19 has created a lot of problems around the world, it has provided a great opportunity for people to enhance their knowledge',
            'image_path'=>'/afracode/assets/images/blog/1-2.jpg',
            'author_image'=>'/afracode/assets/images/people/2.jpg',
            'author_name'=>'Teams'
        ]);

        BlogNews::create([
            'title'=>'Nuxt | ReactJS Creative Personal Portfolio Template',
            'body'=>'Although COVID-19 has created a lot of problems around the world, it has provided a great opportunity for people to enhance their knowledge',
            'image_path'=>'/afracode/assets/images/portfolio/1-3.jpg',
            'author_image'=>'/afracode/assets/images/people/3.jpg',
            'author_name'=>'Teams'

        ]);
    }
}
