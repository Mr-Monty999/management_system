<?php

namespace App\Http\Livewire\Custodies;

use App\Models\Custody;
use App\Services\CustodyService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use  WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public  $type = "all";
    public $custodySpendSum;
    public $custodyBorrowSum;

    public function deleteCustody($id)
    {
        $custody = Custody::find($id);
        $custody->delete();
        session()->flash("success", "تم حذف العهدة بنجاح");
    }

    public function render()
    {

        $custodies = CustodyService::getAllCustodies($this->pattern);

        // dd($custodies->items());


        return view('livewire.custodies.index', ["custodies" => $custodies]);
    }
}
