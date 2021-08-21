<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Discount;
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
        $name = $this->faker->sentence(1);

        $price = $this->faker->randomFloat(2, 3, 100);

        $discounts = Discount::all();

        return [
            'discount_id' => $this->faker->randomElement([
                    $discounts->random()->id, 
                    null
                ]),
            'name' => $name,
            'slug' => Str::slug($name),
            'excerpt' => $this->faker->text(300),
            'description' => $this->faker->text(800),
            'price' => $price,
            'stock' => $this->faker->numberBetween(1, 60),
            'image' => $this->faker->numberBetween(1, 10).'.jpg',
            'status' => $this->faker->randomElement(['available', 'unavailable']),
        ];
    }
}
