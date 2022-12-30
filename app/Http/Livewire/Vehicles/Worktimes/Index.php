<?php

namespace App\Http\Livewire\Vehicles\Worktimes;

use App\Models\VehicleWorkTime;
use App\Services\VehicleService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public $vehicle;
    public $vehicleWorkTimesCount;
    public $vehicleUnAttendTimesCount;
    public $vehicleHoursCount;
    public $vehicleOverTimeCount;

    public function deleteWorkTime($vehicleWorkTimeId)
    {

        $vehicleWorkTime = VehicleWorkTime::find($vehicleWorkTimeId);
        $vehicleWorkTime->delete();
        session()->flash("success", "تم حذف الدوام بنجاح");
    }
    public function render()
    {

        $this->vehicleWorkTimesCount = VehicleService::vehicleWorkTimesCount($this->vehicle->id);
        $this->vehicleUnAttendTimesCount = VehicleService::vehicleUnAttendTimesCount($this->vehicle->id);
        $this->vehicleHoursCount = VehicleService::vehicleHoursCount($this->vehicle->id);
        $this->vehicleOverTimeCount = VehicleService::vehicleOverTimeCount($this->vehicle->id);
        $vehicleWorkTimes = VehicleService::getAllVehicleWorkTimes($this->vehicle->id, $this->pattern);

        return view('livewire.vehicles.worktimes.index', ["vehicleWorkTimes" => $vehicleWorkTimes]);
    }
}
