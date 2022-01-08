<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Product::create([
            'title'=>'Orwell - Organic ',
            'price' => 1000,
            'description'=>'by Afracode in Retail',
        ]);


    }
}
