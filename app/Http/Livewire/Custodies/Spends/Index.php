<?php

namespace App\Http\Livewire\Custodies\Spends;

use App\Models\CustodySpend;
use App\Services\CustodyService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use  WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public $custody;
    public  $type = "all";
    public $custodySubsistenseSpendsSum;
    public $custodyOtherSpendsSum;
    public $custodyAllSpendsSum;


    public function deleteCustodySpend($id)
    {
        $custodySpend = CustodySpend::find($id);
        $custodySpend->delete();
        session()->flash("success", "تم حذف المنصرف بنجاح");
    }

    public function render()
    {
        if ($this->type == "all")
            $custodySpends = CustodyService::getAllCustodySpends($this->pattern);
        else
            $custodySpends = CustodyService::getAllCustodySpendsByType($this->pattern, $this->type);

        $this->custodySubsistenseSpendsSum = CustodyService::getAllCustodySpendsSumByType($this->custody->id, "subsistence");
        $this->custodyOtherSpendsSum = CustodyService::getAllCustodySpendsSumByType($this->custody->id, "others");
        $this->custodyAllSpendsSum = CustodyService::getAllCustodySpendsSum($this->custody->id);

        return view('livewire.custodies.spends.index', ["custodySpends" => $custodySpends]);
    }
}
