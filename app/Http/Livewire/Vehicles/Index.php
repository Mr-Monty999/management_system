<?php

namespace App\Http\Livewire\Vehicles;

use App\Models\Vehicle;
use App\Services\VehicleService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;

    public function deleteVehicle($id)
    {
        $person = Vehicle::find($id);
        $person->delete();
        session()->flash("success", "تم حذف الآلية بنجاح");
    }

    public function render()
    {
        $vehicles = VehicleService::getAllVehicles($this->pattern);
        return view('livewire.vehicles.index', ["vehicles" => $vehicles]);
    }
}
