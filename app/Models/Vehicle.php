<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'trip_count',
        'type',
        'toll'
    ];
    public function trips()
    {
        return $this->hasMany(Trip::class, 'vehicle_id', 'id');
    }
}
