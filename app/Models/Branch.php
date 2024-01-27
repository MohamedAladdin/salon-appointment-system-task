<?php

namespace App\Models;

use App\Models\Salon;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'salon_id',
        'name',
        'address',
        'phone_number',
    ];

    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function serviceCategories()
    {
        return $this->hasMany(ServiceCategory::class);
    }
}
