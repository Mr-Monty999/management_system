<?php

namespace App\Http\Livewire\Stock;

use App\Models\Stock;
use App\Services\StockService;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use  WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pattern;
    public  $type = "all";


    public function deleteStock($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
    }

    public function render()
    {
        if ($this->type == "all")
            $stocks = StockService::getAllStocks($this->pattern);
        else
            $stocks = StockService::getAllStocksByType($this->pattern, $this->type);
        // if ($this->type == "in")
        //     $stocks = StockService::getAllInStocks($this->pattern);
        // elseif ($this->type == "out")
        //     $stocks = StockService::getAllOutStocks($this->pattern);


        return view('livewire.stock.index', ["stocks" => $stocks]);
    }
}
