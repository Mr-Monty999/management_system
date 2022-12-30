<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleWorkTimeRequest;
use App\Http\Requests\UpdateVehicleWorkTimeRequest;
use App\Models\Vehicle;
use App\Models\VehicleWorkTime;

class VehicleWorkTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $vehicle = Vehicle::find($id);
        return view("vehicles.work-times.index", compact("vehicle"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($vehicleId)
    {
        $vehicle = Vehicle::find($vehicleId);
        return view("vehicles.work-times.create", compact("vehicle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleWorkTimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleWorkTimeRequest $request, $vehicleId)
    {
        $data = $request->all();
        $data["vehicle_id"] = $vehicleId;
        $vehicleWorkTime = VehicleWorkTime::create($data);
        return back()->with(["success" => "تم إضافة الدوام بنجاح"]);
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
    public function edit($vehicleId, $vehicleWorkTimeId)
    {
        $vehicle = Vehicle::find($vehicleId);
        $vehicleWorkTime = VehicleWorkTime::find($vehicleWorkTimeId);
        return view("vehicles.work-times.edit", compact("vehicleWorkTime", "vehicle"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleWorkTimeRequest  $request
     * @param  \App\Models\VehicleWorkTime  $vehicleWorkTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleWorkTimeRequest $request, $vehicleId, $vehicleWorkTimeId)
    {
        $data = $request->all();
        $data["vehilce_id"] = $vehicleId;
        $vehicleWorkTime = VehicleWorkTime::find($vehicleWorkTimeId);
        $vehicleWorkTime->update($data);
        return back()->with(["success" => "تم تعديل الدوام بنجاح"]);
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
