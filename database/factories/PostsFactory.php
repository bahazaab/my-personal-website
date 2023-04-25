<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'category_id'=>Categories::factory(),
         'title'=>fake()->sentence(3),
         'excerpt'=>fake()->sentence(15),
         'image_url'=>fake()->imageUrl(),
         'body'=>'<p>'.implode( "</p><p>",fake()->paragraphs(10)).'</p>'
        ];
    }
}
