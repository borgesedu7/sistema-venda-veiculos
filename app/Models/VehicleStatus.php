<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleStatus extends Model
{
    protected $fillable = [
        "status"
    ];

    protected $table = 'vehicle_status';
}