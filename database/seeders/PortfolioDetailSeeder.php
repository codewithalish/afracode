<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\Service;
use Illuminate\Database\Seeder;

class portfolioDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioDetail::create([
            'image_path'=>'/afracode/assets/images/illustrations/1.svg',
            'title'=>'Orwell - Organic ',
            'body'=>'by Afracode in Retail'
        ]);

        PortfolioDetail::create([
            'image_path'=>'/afracode/assets/images/illustrations/1.svg',
            'title'=>'Orwell - Organic ',
            'body'=>'by Afracode in Retail'
        ]);

        PortfolioDetail::create([
            'image_path'=>'/afracode/assets/images/illustrations/1.svg',
            'title'=>'Orwell - Organic ',
            'body'=>'by Afracode in Retail'
        ]);
    }
}
