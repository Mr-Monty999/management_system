<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleProductionMovementRequest;
use App\Http\Requests\UpdateVehicleProductionMovementRequest;
use App\Models\Vehicle;
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
    public function index($vehicleId)
    {
        $vehicle = Vehicle::find($vehicleId);
        return view("vehicles.production-movements.index", compact("vehicle"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($vehicleId)
    {
        $vehicle = Vehicle::find($vehicleId);
        return view("vehicles.production-movements.create", compact("vehicle"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleProductionMovementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleProductionMovementRequest $request, $vehicleId)
    {
        $data = $request->all();
        $data["vehicle_id"] = $vehicleId;
        $vehicleProductionMovement = VehicleProductionMovement::create($data);
        return back()->with(["success" => "تم إضافة حراك الإنتاج بنجاح"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleProductionMovement  $vehicleProductionMovement
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleProductionMovement $vehicleProductionMovement)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleProductionMovement  $vehicleProductionMovement
     * @return \Illuminate\Http\Response
     */
    public function edit($vehicleId, $vehicleProductionMovementId)
    {
        $vehicle = Vehicle::find($vehicleId);
        $vehicleProductionMovement = VehicleProductionMovement::find($vehicleProductionMovementId);
        return view("vehicles.production-movements.edit", compact("vehicleProductionMovement", "vehicle"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleProductionMovementRequest  $request
     * @param  \App\Models\VehicleProductionMovement  $vehicleProductionMovement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleProductionMovementRequest $request, $vehicleId, $vehicleProductionMovementId)
    {
        $data = $request->all();
        $data["vehilce_id"] = $vehicleId;
        $vehicleProductionMovement = VehicleProductionMovement::find($vehicleProductionMovementId);
        $vehicleProductionMovement->update($data);
        return back()->with(["success" => "تم تعديل حراك الإنتاج بنجاح"]);
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
