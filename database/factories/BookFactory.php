<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Book::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
      'author' => $this->faker->name(),
      'description' => $this->faker->text(),
      'cover' => $this->faker->imageUrl($width = 640, $height = 480),
      'publishDate' => $this->faker->date(),
    ];
  }
}