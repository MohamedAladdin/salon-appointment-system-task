<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceTeamMemberPivot>
 */
class ServiceTeamMemberPivotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'service_id' => rand(1, 200),
            'team_member_id' => rand(1, 100),
        ];
    }
}
