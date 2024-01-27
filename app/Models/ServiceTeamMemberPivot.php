<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTeamMemberPivot extends Model
{
    use HasFactory;

    protected $table = 'service_team_member';

    protected $fillable = [
        'service_id',
        'team_member_id',
    ];
}
