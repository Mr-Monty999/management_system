<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleWorkTimeRequest;
use App\Http\Requests\UpdateVehicleWorkTimeRequest;
use App\Models\VehicleWorkTime;

class VehicleWorkTimeController extends Controller
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
     * @param  \App\Http\Requests\StoreVehicleWorkTimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleWorkTimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleWorkTime  $vehicleWorkTime
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleWorkTime $vehicleWorkTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleWorkTime  $vehicleWorkTime
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleWorkTime $vehicleWorkTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleWorkTimeRequest  $request
     * @param  \App\Models\VehicleWorkTime  $vehicleWorkTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleWorkTimeRequest $request, VehicleWorkTime $vehicleWorkTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleWorkTime  $vehicleWorkTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleWorkTime $vehicleWorkTime)
    {
        //
    }
}
