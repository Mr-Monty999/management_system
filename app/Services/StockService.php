<?php

namespace App\Services;

use App\Models\Stock;

/**
 * Class StockService.
 */
class StockService
{
    public static function getAllInStocks($pattern = "")
    {
        $stocks = Stock::where("type", "in");

        return $stocks->where("name", "LIKE", "%$pattern%")
            ->orWhere("sender", "LIKE", "%$pattern%")
            ->orWhere("receiver", "LIKE", "%$pattern%")
            ->orWhere("count", "LIKE", "%$pattern%")
            ->orWhere("note", "LIKE", "%$pattern%")
            // ->where("type", '=', "in")
            ->latest()
            ->paginate(10);
    }
    public static function getAllOutStocks($pattern = "")
    {
        $stocks = Stock::where("type", "in");

        return $stocks->where("name", "LIKE", "%$pattern%")
            ->orWhere("sender", "LIKE", "%$pattern%")
            ->orWhere("receiver", "LIKE", "%$pattern%")
            ->orWhere("count", "LIKE", "%$pattern%")
            ->orWhere("note", "LIKE", "%$pattern%")
            // ->where("type", '=', "out")
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
