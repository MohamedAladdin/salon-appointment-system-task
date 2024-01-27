<?php

namespace App\Models;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMemberSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_member_id',
        'day_of_week',
        'start_time',
        'end_time',
    ];

    public function teamMember()
    {
        return $this->belongsTo(TeamMember::class);
    }
}
