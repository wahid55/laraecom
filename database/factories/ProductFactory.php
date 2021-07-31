<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = $this->faker->numberBetween(100, 10000);
        return [
            'sku'           => $this->faker->regexify(),
            'name'          => $this->faker->sentence(),
            'slug'          => $this->faker->slug(),
            'description'   => $this->faker->realText(),
            'quantity'      => $this->faker->numberBetween(100, 1000),
            'weight'        => $this->faker->numberBetween(1, 1000),
            'price'         => $price,
            'sale_price'    => ($price - $price * .2),
            'status'        => $this->faker->boolean(90),
            'featured'      => $this->faker->boolean(),
            'brand_id'      => $this->faker->numberBetween(1, 20),
            'shop_id'       => $this->faker->numberBetween(1, 20),
        ];
    }
}
