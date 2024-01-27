<?php

namespace Database\Factories;

use App\Models\TeamMember;
use App\Models\TeamMemberSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamMemberScheduleFactory extends Factory
{
    protected $model = TeamMemberSchedule::class;

    public function definition()
    {
        return [
            'team_member_id' => rand(1, 200),
            'start_time' => $this->faker->time,
            'end_time' => $this->faker->time,
            'day_of_week' => rand(0, 6),
        ];
    }
}