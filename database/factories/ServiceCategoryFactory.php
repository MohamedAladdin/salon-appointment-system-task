<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCategoryFactory extends Factory
{
    protected $model = ServiceCategory::class;

    public function definition()
    {
        return [
            'branch_id' => rand(1, 25),
            'name' => $this->faker->word,
        ];
    }
}