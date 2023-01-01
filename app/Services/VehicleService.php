<?php

namespace App\Services;

use App\Models\Vehicle;
use App\Models\VehicleFuel;
use App\Models\VehicleMaintenance;
use App\Models\VehicleProductionMovement;
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
                    ->orWhere("hours_count", "LIKE", "%$pattern%")
                    ->orWhere("overtime", "LIKE", "%$pattern%")
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

    public static function vehicleFuelsCount($vehicleId)
    {
        return VehicleFuel::where("vehicle_id", $vehicleId)
            ->sum("fuel_quantity");
    }
    public static function getAllVehicleFuels($vehilceId, $pattern)
    {
        $vehicleFuels = VehicleFuel::where("vehicle_id", $vehilceId)
            ->where(function ($q) use ($pattern) {
                $q->where("driver", "LIKE", "%$pattern%")
                    ->orWhere("responsible", "LIKE", "%$pattern%")
                    ->orWhere("fuel_quantity", "LIKE", "%$pattern%")
                    ->orWhere("note", "LIKE", "%$pattern%");
            })
            ->paginate(15);

        return $vehicleFuels;
    }
    public static function vehicleMaintenancesCount($vehicleId)
    {
        return VehicleMaintenance::where("vehicle_id", $vehicleId)
            ->sum("money_amount");
    }
    public static function getAllVehicleMaintenances($vehilceId, $pattern)
    {
        $vehicleMaintenances = VehicleMaintenance::where("vehicle_id", $vehilceId)
            ->where(function ($q) use ($pattern) {
                $q->where("driver", "LIKE", "%$pattern%")
                    ->orWhere("responsible", "LIKE", "%$pattern%")
                    ->orWhere("money_amount", "LIKE", "%$pattern%")
                    ->orWhere("note", "LIKE", "%$pattern%");
            })
            ->paginate(15);

        return $vehicleMaintenances;
    }
    public static function vehicleProductionMovementsCount($vehicleId)
    {
        return VehicleProductionMovement::where("vehicle_id", $vehicleId)
            ->sum("quantity");
    }
    public static function getAllVehicleProductionMovements($vehilceId, $pattern)
    {
        $vehicleProductionMovements = VehicleProductionMovement::where("vehicle_id", $vehilceId)
            ->where(function ($q) use ($pattern) {
                $q->where("driver", "LIKE", "%$pattern%")
                    ->orWhere("responsible", "LIKE", "%$pattern%")
                    ->orWhere("type", "LIKE", "%$pattern%")
                    ->orWhere("quantity", "LIKE", "%$pattern%")
                    ->orWhere("note", "LIKE", "%$pattern%");
            })
            ->paginate(15);

        return $vehicleProductionMovements;
    }
}
