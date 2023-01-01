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
    public $custodyAllBorrowsSum;
    public $custodySubsistenseSpendsSum;
    public $custodyOtherSpendsSum;
    public $custodyAllSpendsSum;

    public function deleteCustody($id)
    {
        $custody = Custody::find($id);
        $custody->delete();
        session()->flash("success", "تم حذف العهدة بنجاح");
    }

    public function render()
    {

        $custodies = CustodyService::getAllCustodies($this->pattern);

        $this->custodySubsistenseSpendsSum = CustodyService::getAllCustodiesSpendsSumByType("subsistence");
        $this->custodyOtherSpendsSum = CustodyService::getAllCustodiesSpendsSumByType("others");
        $this->custodyAllBorrowsSum = CustodyService::getAllCustodiesBorrowsSum();
        $this->custodyAllSpendsAndBorrowsSum
            = $this->custodySubsistenseSpendsSum
            + $this->custodyOtherSpendsSum
            + $this->custodyAllBorrowsSum;

        return view('livewire.custodies.index', ["custodies" => $custodies]);
    }
}
