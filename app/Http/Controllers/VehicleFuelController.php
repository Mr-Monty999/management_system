<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleFuelRequest;
use App\Http\Requests\UpdateVehicleFuelRequest;
use App\Models\Vehicle;
use App\Models\VehicleFuel;

class VehicleFuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $vehicle = Vehicle::find($id);
        return view("vehicles.fuels.index", compact("vehicle"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($vehicleId)
    {
        $vehicle = Vehicle::find($vehicleId);
        return view("vehicles.fuels.create", compact("vehicle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleFuelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleFuelRequest $request, $vehicleId)
    {
        $data = $request->all();
        $data["vehicle_id"] = $vehicleId;
        $vehicleFuel = VehicleFuel::create($data);
        return back()->with(["success" => "تم إضافة الوقود بنجاح"]);
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
    public function edit($vehicleId, $vehicleFuelId)
    {
        $vehicle = Vehicle::find($vehicleId);
        $vehicleFuel = VehicleFuel::find($vehicleFuelId);
        return view("vehicles.fuels.edit", compact("vehicleFuel", "vehicle"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleFuelRequest  $request
     * @param  \App\Models\VehicleFuel  $vehicleFuel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleFuelRequest $request, $vehicleId, $vehicleFuelId)
    {
        $data = $request->all();
        // $data["vehicle_id"] = $vehicleId;
        $vehicleFuel = VehicleFuel::find($vehicleFuelId);
        $vehicleFuel->update($data);
        return back()->with(["success" => "تم تعديل الوقود بنجاح"]);
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
