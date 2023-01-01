<?php

namespace App\Http\Livewire\Vehicles\Maintenances;

use App\Models\VehicleMaintenance;
use App\Services\VehicleService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public $vehicle;
    public $vehicleMaintenancesCount;


    public function deleteMaintenance($vehicleMaintenanceId)
    {

        $vehicleMaintenance = VehicleMaintenance::find($vehicleMaintenanceId);
        $vehicleMaintenance->delete();
        session()->flash("success", "تم حذف الوقود بنجاح");
    }
    public function render()
    {

        $this->vehicleMaintenancesCount = VehicleService::vehicleMaintenancesCount($this->vehicle->id);
        $vehicleMaintenances = VehicleService::getAllVehicleMaintenances($this->vehicle->id, $this->pattern);

        return view('livewire.vehicles.maintenances.index', ["vehicleMaintenances" => $vehicleMaintenances]);
    }
}
