<?php

namespace App\Http\Livewire\Vehicles\ProductionMovement;

use App\Models\VehicleProductionMovement;
use App\Services\VehicleService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use  WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public $vehicle;
    public $vehicleProductionMovementsCount;


    public function deleteProductionMovement($vehicleProductionMovementId)
    {

        $vehicleProductionMovement = VehicleProductionMovement::find($vehicleProductionMovementId);
        $vehicleProductionMovement->delete();
        session()->flash("success", "تم حذف حركة الإنتاج بنجاح");
    }
    public function render()
    {

        $this->vehicleProductionMovementsCount = VehicleService::vehicleProductionMovementsCount($this->vehicle->id);
        $vehicleProductionMovements = VehicleService::getAllVehicleProductionMovements($this->vehicle->id, $this->pattern);

        return view('livewire.vehicles.production-movement.index', ["vehicleProductionMovements" => $vehicleProductionMovements]);
    }
}
