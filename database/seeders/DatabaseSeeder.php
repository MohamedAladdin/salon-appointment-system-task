<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Salon;
use App\Models\Branch;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Appointment;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;
use App\Models\TeamMemberSchedule;
use App\Models\ServiceTeamMemberPivot;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Salon::factory(3)->create();
        Branch::factory(15)->create();
        TeamMember::factory(100)->create();
        ServiceCategory::factory(20)->create();
        Service::factory(200)->create();
        TeamMemberSchedule::factory(700)->create();
        ServiceTeamMemberPivot::factory(2000)->create();
        Appointment::factory(100)->create();

    }
}
