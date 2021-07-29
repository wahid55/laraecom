<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(200),
            'logo' => $this->faker->imageUrl(200, 200),
            'street' => $this->faker->streetAddress(),
            'state' => $this->faker->state(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'zip' => $this->faker->postcode(),
            'email' => $this->faker->unique()->companyEmail(),
            'mobile' => $this->faker->unique()->e164PhoneNumber(),
            'admin_id' => $this->faker->unique()->numberBetween(2, 21),
        ];
    }
}
