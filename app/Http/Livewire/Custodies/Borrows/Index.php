<?php

namespace App\Http\Livewire\Custodies\Borrows;

use App\Models\CustodyBorrow;
use App\Services\CustodyService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use  WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public $custody;
    public $type = "all";



    public function deleteCustodyBorrow($id)
    {
        $custodyBorrow = CustodyBorrow::find($id);
        $custodyBorrow->delete();
        session()->flash("success", "تم حذف السلفية بنجاح");
    }

    public function render()
    {
        $custodyBorrows = CustodyService::getAllCustodyBorrows($this->pattern);


        return view('livewire.custodies.borrows.index', ["custodyBorrows" => $custodyBorrows]);
    }
}
