<?php

namespace App\Services;

use App\Models\Vehicle;
use App\Models\VehicleWorkTime;

/**
 * Class VehicleService.
 */
class VehicleService
{

    public static function getAllVehicles($pattern)
    {
        $vehicles = Vehicle::where("name", "LIKE", "%$pattern%")
            ->orWhere("number", "LIKE", "%$pattern%")
            ->paginate(15);
        return $vehicles;
    }
    public static function getAllVehicleWorkTimes($vehilceId, $pattern)
    {
        $vehicleWorkTimes = VehicleWorkTime::where("vehicle_id", $vehilceId)
            ->where(function ($q) use ($pattern) {
                $q->where("driver", "LIKE", "%$pattern%")
                    ->orWhere("note", "LIKE", "%$pattern%");
            })
            ->paginate(15);

        return $vehicleWorkTimes;
    }
    public static function vehicleUnAttendTimesCount($vehicleId)
    {

        return VehicleWorkTime::where("vehicle_id", $vehicleId)
            ->where(
                "is_present",
                0
            )
            ->count();
    }
    public static function vehicleWorkTimesCount($vehicleId)
    {
        return VehicleWorkTime::where("vehicle_id", $vehicleId)
            ->where("is_present", 1)
            ->count();
    }
    public static function vehicleOverTimeCount($vehicleId)
    {

        return VehicleWorkTime::where("vehicle_id", $vehicleId)
            ->sum("overtime");
    }
    public static function vehicleHoursCount($vehicleId)
    {
        return VehicleWorkTime::where("vehicle_id", $vehicleId)
            ->sum("hours_count");
    }
}
