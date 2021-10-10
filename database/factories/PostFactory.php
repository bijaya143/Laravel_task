<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'meta_title' => $this->faker->sentence(1),
            'meta_description' => $this->faker->paragraph(1),
            'image' => 'furniture_' . $this->faker->numberBetween(1,9). '.jpg',
            'description' => $this->faker->paragraph(2)
        ];
    }
}
