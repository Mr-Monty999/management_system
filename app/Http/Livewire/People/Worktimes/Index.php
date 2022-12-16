<?php

namespace App\Http\Livewire\People\Worktimes;

use App\Models\Person;
use App\Models\PersonWorkTime;
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

    public function render()
    {
        // Carbon::getLo
        $this->personWorkTimesCount = PersonWorkTime::where("person_id", $this->person->id)
            ->where("is_present", 1)
            ->count();
        $this->personUnAttendTimesCount = PersonWorkTime::where("person_id", $this->person->id)
            ->where(
                "is_present",
                0
            )
            ->count();

        $personWorkTimes = PersonWorkTime::where("person_id", $this->person->id)
            ->paginate(15);
        return view('livewire.people.worktimes.index', ["personWorkTimes" => $personWorkTimes]);
    }
}
