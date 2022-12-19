<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleProductionMovementRequest;
use App\Http\Requests\UpdateVehicleProductionMovementRequest;
use App\Models\VehicleProductionMovement;
use Illuminate\Support\Facades\URL as FacadesURL;
use URL;

class VehicleProductionMovementController extends Controller
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
     * @param  \App\Http\Requests\StoreVehicleProductionMovementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleProductionMovementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleProductionMovement  $vehicleProductionMovement
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleProductionMovement $vehicleProductionMovement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleProductionMovement  $vehicleProductionMovement
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleProductionMovement $vehicleProductionMovement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleProductionMovementRequest  $request
     * @param  \App\Models\VehicleProductionMovement  $vehicleProductionMovement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleProductionMovementRequest $request, VehicleProductionMovement $vehicleProductionMovement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleProductionMovement  $vehicleProductionMovement
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleProductionMovement $vehicleProductionMovement)
    {
        //
    }
}
