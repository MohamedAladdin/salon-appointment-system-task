<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\TeamMemberSchedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'name',
        'email',
        'phone_number',
    ];

    public function whoAvailableOn($date, $serviceId)
    {
        $date = Carbon::parse($date);

        $dayOfWeek = $date->dayOfWeek;

        return $this->whereHas('schedules', function ($query) use ($dayOfWeek) {
            $query->where('day_of_week', $dayOfWeek);
        })->whereHas('services', function ($query) use ($serviceId) {
            $query->where('service_id', $serviceId);
        })->get();
    }

    public function getAvailableSlots($date, $serviceDuration)
    {
        $workingHoursStart = 9 * 60; // 9:00 AM in minutes
        $workingHoursEnd = 17 * 60; // 5:00 PM in minutes

        $appointments = $this->appointments()->whereDate('date', $date)->get();

        $occupiedMinutes = [];
        foreach ($appointments as $appointment) {
            $start = $appointment->start_time->minute + $appointment->start_time->hour * 60;
            $end = $appointment->end_time->minute + $appointment->end_time->hour * 60;
            $occupiedMinutes = array_merge($occupiedMinutes, range($start, $end));
        }

        $allMinutes = range($workingHoursStart, $workingHoursEnd);
        $availableMinutes = array_diff($allMinutes, $occupiedMinutes);

        $availableSlots = [];
        $slot = [];
        foreach ($availableMinutes as $minute) {
            $slot[] = $minute;
            if (count($slot) == $serviceDuration) {
                $availableSlots[] = $slot;
                $slot = [];
            }
        }

        return $availableSlots;
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function schedules()
    {
        return $this->hasMany(TeamMemberSchedule::class);
    }


    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }


}
