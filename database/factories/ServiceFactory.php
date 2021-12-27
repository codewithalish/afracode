<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'icon' => $this->faker->randomElement(['ti-paint-bucket','ti-desktop','ti-pie-chart']),
            'image_path' => $this->faker->randomElement([
                '/afracode/assets/images/illustrations/1.svg',
                '/afracode/assets/images/illustrations/2.svg',
                '/afracode/assets/images/illustrations/3.svg',
                '/afracode/assets/images/illustrations/4.svg',
                ]),
        ];
    }
}
