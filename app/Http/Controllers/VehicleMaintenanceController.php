<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleMaintenanceRequest;
use App\Http\Requests\UpdateVehicleMaintenanceRequest;
use App\Models\VehicleMaintenance;

class VehicleMaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleMaintenanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleMaintenanceRequest $request)
    {
        //
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
    public function edit(VehicleMaintenance $vehicleMaintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleMaintenanceRequest  $request
     * @param  \App\Models\VehicleMaintenance  $vehicleMaintenance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleMaintenanceRequest $request, VehicleMaintenance $vehicleMaintenance)
    {
        //
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
