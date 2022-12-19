<?php

namespace App\Http\Livewire\People\Worktimes;

use App\Models\Person;
use App\Models\PersonWorkTime;
use App\Services\PersonService;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public $person;
    public $personWorkTimesCount;
    public $personUnAttendTimesCount;

    public function deleteWorkTime($personWorkTimeId)
    {
        $personWorkTime = PersonWorkTime::find($personWorkTimeId);
        $personWorkTime->delete();
        session()->flash("success", "تم حذف الدوام بنجاح");
    }
    public function render()
    {
        // Carbon::getLo
        $this->personWorkTimesCount = PersonService::personWorkTimesCount($this->person->id);
        $this->personUnAttendTimesCount = PersonService::personUnAttendTimesCount($this->person->id);

        $personWorkTimes = PersonWorkTime::where("person_id", $this->person->id)->latest()
            ->paginate(15);
        return view('livewire.people.worktimes.index', ["personWorkTimes" => $personWorkTimes]);
    }
}
