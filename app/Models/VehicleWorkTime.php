<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleWorkTime extends Model
{
    use HasFactory, SoftDeletes;


    protected $guarded = ["id"];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
