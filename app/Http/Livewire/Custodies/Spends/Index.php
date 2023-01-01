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


        return view('livewire.custodies.spends.index', ["custodySpends" => $custodySpends]);
    }
}
