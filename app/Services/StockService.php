<?php

namespace App\Services;

use App\Models\Stock;

/**
 * Class StockService.
 */
class StockService
{
    public static function getAllStocksByType($pattern = "", $type)
    {

        return Stock::where("type", '=', $type)
            ->where(function ($q) use ($pattern) {
                $q->orWhere("name", "LIKE", "%$pattern%")
                    ->orWhere("sender", "LIKE", "%$pattern%")
                    ->orWhere("receiver", "LIKE", "%$pattern%")
                    ->orWhere("count", "LIKE", "%$pattern%")
                    ->orWhere("note", "LIKE", "%$pattern%");
            })
            ->latest()
            ->paginate(10);
    }
    public static function getAllStocks($pattern = "")
    {
        return Stock::where("name", "LIKE", "%$pattern%")
            ->orWhere("sender", "LIKE", "%$pattern%")
            ->orWhere("receiver", "LIKE", "%$pattern%")
            ->orWhere("count", "LIKE", "%$pattern%")
            ->orWhere("note", "LIKE", "%$pattern%")
            ->latest()
            ->paginate(10);
    }
}
