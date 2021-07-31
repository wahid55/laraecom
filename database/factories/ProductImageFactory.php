<?php

namespace Database\Factories;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thumbnail' => $this->faker->imageUrl(150, 150),
            'medium' => $this->faker->imageUrl(300, 300),
            'full' => $this->faker->imageUrl(600, 600),
            'original' => $this->faker->imageUrl(1200, 1200),
            'product_id' => $this->faker->numberBetween(1, 500)
        ];
    }
}
