<?php

namespace Database\Factories;

// way 2 use factory file
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    // way 2 use factory file
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

                // way 2 use factory file
                'name' => $this->faker->name(),
                'price' => $this->faker->biasedNumberBetween(200,5000),
                'category_id' =>$this->faker->biasedNumberBetween(1,3),
                'created_at' => $this->faker->dateTime($max = 'now'),
                'updated_at' => $this->faker->dateTime($max = 'now')
        ];
    }
}
