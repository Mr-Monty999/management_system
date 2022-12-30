<?php

namespace App\Http\Livewire\Vehicles\Fuels;

use App\Models\VehicleFuel;
use App\Services\VehicleService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public $vehicle;
    public $vehicleFuelsCount;


    public function deleteFuel($vehicleFuelId)
    {

        $vehicleFuel = VehicleFuel::find($vehicleFuelId);
        $vehicleFuel->delete();
        session()->flash("success", "تم حذف الوقود بنجاح");
    }
    public function render()
    {

        $this->vehicleFuelsCount = VehicleService::vehicleFuelsCount($this->vehicle->id);
        $vehicleFuels = VehicleService::getAllVehicleFuels($this->vehicle->id, $this->pattern);

        return view('livewire.vehicles.fuels.index', ["vehicleFuels" => $vehicleFuels]);
    }
}
