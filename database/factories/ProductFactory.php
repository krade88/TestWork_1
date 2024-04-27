<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(100, 1000), // Генерация случайной цены между 100 и 1000
            'image' => $this->faker->imageUrl(), // Генерация случайной ссылки на изображение
            'own_product' => $this->faker->boolean(), // Генерация случайного булевого значения
            'category_id' => Category::inRandomOrder()->first()->id, // Выбираем случайную категорию из базы данных
        ];
    }
}
