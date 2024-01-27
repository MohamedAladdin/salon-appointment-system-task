<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_category_id',
        'name',
        'slug',
        'short_description',
        'image',
        'details',
        'duration',
        'price',
        'is_active',
        'is_featured',
        'is_popular',
        'is_new',
        'is_discounted',
        'discount_percentage',
    ];


    public function search($term) {
        return $this->where('name', 'like', '%'.$term.'%')
            ->orWhere('short_description', 'like', '%'.$term.'%')
            ->orWhere('details', 'like', '%'.$term.'%');
    }

    public function teamMembers()
    {
        return $this->belongsToMany(TeamMember::class);
    }



}
