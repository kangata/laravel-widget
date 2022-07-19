<?php

namespace Database\Factories;

use App\Constants\WidgetTypeConstant as Type;
use App\Widgets\Banner\BannerDataFactory;
use App\Widgets\Jumbotron\JumbotronDataFactory;
use App\Widgets\License\LicenseDataFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Widget>
 */
class WidgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'active' => 1,
        ];
    }

    public function banner()
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'Banner' . $this->faker->text(100),
            'type' => Type::BANNER,
            'file' => 'Banner',
            'data' => BannerDataFactory::make([
                'title' => $this->faker->sentence(),
                'description' => $this->faker->paragraph(),
                'image' => 'https://source.unsplash.com/random/300×300/?fruit&s='. $this->faker->text(10),
                'link' => 'https://localhost:8000',
            ]),
        ]);
    }

    public function jumbotron()
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'Jumbotron' . $this->faker->text(100),
            'type' => Type::JUMBOTRON,
            'file' => 'Jumbotron',
            'data' => JumbotronDataFactory::make([
                'title' => $this->faker->sentence(),
                'description' => $this->faker->paragraph(),
                'image' => 'https://source.unsplash.com/random/300×300/?fruit&s='. $this->faker->text(10),
            ]),
        ]);
    }

    public function license()
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'License' . $this->faker->text(100),
            'type' => Type::LICENSE,
            'file' => 'License',
            'data' => array_map(fn () => LicenseDataFactory::make([
                'text' => $this->faker->paragraph(),
                'image' => 'https://source.unsplash.com/random/300x50/?fruit&s='. $this->faker->text(10),
            ]), array_fill(0, rand(1, 4), null)),
        ]);
    }

    public function pageContent()
    {
        return $this->state(fn (array $attributes) => [
            'name' => 'Page Content',
            'type' => Type::PAGE_CONTENT,
            'file' => 'PageContent',
            'data' => null,
        ]);
    }
}
