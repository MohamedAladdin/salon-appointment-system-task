<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'service_category_id' => rand(1, 300),
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'short_description' => $this->faker->sentence,
            'image' => 'https://via.placeholder.com/300x300.png/00ff99?text=Service+Image',
            'details' => $this->faker->sentence,
            'duration' => $this->faker->numberBetween(30, 120), 
            'price' => $this->faker->numberBetween(100, 1000), 
            'is_active' => $this->faker->boolean,
            'is_featured' => $this->faker->boolean,
            'is_popular' => $this->faker->boolean,
            'is_new' => $this->faker->boolean,
            'discount_percentage' => $this->faker->numberBetween(10, 50), 
        ];
    }
}