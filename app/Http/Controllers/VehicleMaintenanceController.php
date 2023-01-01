<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleMaintenanceRequest;
use App\Http\Requests\UpdateVehicleMaintenanceRequest;
use App\Models\Vehicle;
use App\Models\VehicleMaintenance;

class VehicleMaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($vehicleId)
    {
        $vehicle = Vehicle::find($vehicleId);
        return view("vehicles.maintenances.index", compact("vehicle"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($vehicleId)
    {

        $vehicle = Vehicle::find($vehicleId);
        return view("vehicles.maintenances.create", compact("vehicle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleMaintenanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleMaintenanceRequest $request, $vehicleId)
    {
        $data = $request->all();
        $data["vehicle_id"] = $vehicleId;
        $vehicleMaintenance = VehicleMaintenance::create($data);
        return back()->with(["success" => "تم إضافة الصيانة بنجاح"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleMaintenance  $vehicleMaintenance
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleMaintenance $vehicleMaintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleMaintenance  $vehicleMaintenance
     * @return \Illuminate\Http\Response
     */
    public function edit($vehicleId, $vehicleMaintenanceId)
    {
        $vehicle = Vehicle::find($vehicleId);
        $vehicleMaintenance = VehicleMaintenance::find($vehicleMaintenanceId);
        return view("vehicles.maintenances.edit", compact("vehicleMaintenance", "vehicle"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleMaintenanceRequest  $request
     * @param  \App\Models\VehicleMaintenance  $vehicleMaintenance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleMaintenanceRequest $request, $vehicleId, $vehicleMaintenanceId)
    {
        $data = $request->all();
        $data["vehilce_id"] = $vehicleId;
        $vehicleMaintenance = VehicleMaintenance::find($vehicleMaintenanceId);
        $vehicleMaintenance->update($data);
        return back()->with(["success" => "تم تعديل الصيانة بنجاح"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleMaintenance  $vehicleMaintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleMaintenance $vehicleMaintenance)
    {
        //
    }
}
