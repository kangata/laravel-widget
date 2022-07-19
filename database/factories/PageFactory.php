<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence() . ' '. $this->faker->text(5);

        $slug = Str::slug($title);

        return [
            'slug' => $slug,
            'title' => $title,
            'content' => $this->faker->paragraph(100),
            'active' => 1,
        ];
    }
}
