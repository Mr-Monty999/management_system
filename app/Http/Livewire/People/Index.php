<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;

    public function render()
    {
        $people = Person::where("name", "LIKE", "%$this->pattern%")
            ->orWhere("national_number", "LIKE", "%$this->pattern%")
            ->orWhere("salary", "LIKE", "%$this->pattern%")
            ->paginate(15);
        return view('livewire.people.index', ["people" => $people]);
    }
}
