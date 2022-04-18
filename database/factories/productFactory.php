<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition()
    {
        return [
            'name' => $this->faker->text(15),
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'user_id' => rand(1,10)
        ];
    }
}
