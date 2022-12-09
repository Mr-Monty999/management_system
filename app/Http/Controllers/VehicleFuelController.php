<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleFuelRequest;
use App\Http\Requests\UpdateVehicleFuelRequest;
use App\Models\VehicleFuel;

class VehicleFuelController extends Controller
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
     * @param  \App\Http\Requests\StoreVehicleFuelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleFuelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleFuel  $vehicleFuel
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleFuel $vehicleFuel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleFuel  $vehicleFuel
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleFuel $vehicleFuel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleFuelRequest  $request
     * @param  \App\Models\VehicleFuel  $vehicleFuel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleFuelRequest $request, VehicleFuel $vehicleFuel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleFuel  $vehicleFuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleFuel $vehicleFuel)
    {
        //
    }
}
