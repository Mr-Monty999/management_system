<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function mainTenances()
    {
        return $this->hasMany(VehicleMaintenance::class);
    }

    public function workTimes()
    {
        return $this->hasMany(VehicleWorkTime::class);
    }

    public function fuels()
    {
        return $this->hasMany(VehicleFuel::class);
    }
    public function productionMovements()
    {
        return $this->hasMany(VehicleProductionMovement::class);
    }
}
