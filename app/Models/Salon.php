<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salon extends Model
{
    use HasFactory; 

    protected $table = 'salons';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
