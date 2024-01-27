<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Branch;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'branch_id' => rand(1, 25),
            'service_id' => rand(1, 3000),
            'team_member_id' => rand(1, 200),
            'customer_id' => rand(1, 1000),
            'appointment_date' => $this->faker->date(),
            'appointment_time' => $this->faker->time(),
        ];
    }
}
