<?php

namespace Database\Factories;

use App\Models\Borrower;
use Illuminate\Database\Eloquent\Factories\Factory;

class BorrowerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Borrower::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name' => $this->faker->name(),
          'avatar' => $this->faker->imageUrl($width = 640, $height = 480),
          'email' => $this->faker->unique()->safeEmail(),
          'phone_no'=> $this->faker->phoneNumber(),
        ];
    }
}