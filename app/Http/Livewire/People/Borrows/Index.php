<?php

namespace App\Http\Livewire\People\Borrows;

use App\Models\Person;
use App\Models\PersonBorrow;
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


    public function deleteBorrow($personBorrowId)
    {
        $personBorrow = PersonBorrow::find($personBorrowId);
        $personBorrow->delete();
        session()->flash("success", "تم حذف السلفية بنجاح");
    }
    public function render()
    {
        // Carbon::getLo

        $personBorrows = PersonBorrow::where("person_id", $this->person->id)->latest()
            ->paginate(15);
        return view('livewire.people.borrows.index', ["personBorrows" => $personBorrows]);
    }
}
