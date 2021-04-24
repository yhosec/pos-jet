<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $code = $this->faker->randomNumber(5);
        return [
            'store_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'code' => $code,
            'name' => $this->faker->firstName. ' ' . $code,
            'qty' => $this->faker->randomNumber(3),
            'price' => $this->faker->randomNumber(2) * $this->faker->randomElement([10, 100, 1000])
        ];
    }
}
