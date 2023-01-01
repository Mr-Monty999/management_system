<?php

namespace App\Services;

use App\Models\Custody;
use App\Models\CustodyBorrow;
use App\Models\CustodySpend;

/**
 * Class CustodyService.
 */
class CustodyService
{

    public static function getAllCustodies($pattern = "")
    {
        $custodies =  Custody::withSum([
            "borrows",
            "subsistenceSpends",
            "otherSpends"

        ], "money_amount")
            ->where("money_amount", "LIKE", "%$pattern%")
            ->orWhere("sender", "LIKE", "%$pattern%")
            ->orWhere("receiver", "LIKE", "%$pattern%")
            ->orWhere("note", "LIKE", "%$pattern%")
            ->latest()
            ->paginate(10);


        return $custodies;
    }
    public static function getAllCustodiesBorrowsSum()
    {
        return CustodyBorrow::sum("money_amount");
    }
    public static function getAllCustodiesSpendsSumByType($type)
    {
        return CustodySpend::where("type", $type)
            ->sum("money_amount");
    }
    public static function getAllCustodiesSpendsAndBorrowsSum($custodyId)
    {
        return Custody::find($custodyId)->money_amount - (CustodySpend::where("custody_id", $custodyId)->sum("money_amount") + CustodyBorrow::where("custody_id", $custodyId)->sum("money_amount"));
    }

    public static function getAllCustodySpendsByType($pattern = "", $type)
    {

        return CustodySpend::where("type", '=', $type)
            ->where(function ($q) use ($pattern) {
                $q->orWhere("responsible", "LIKE", "%$pattern%")
                    ->orWhere("money_amount", "LIKE", "%$pattern%")
                    ->orWhere("note", "LIKE", "%$pattern%");
            })
            ->latest()
            ->paginate(10);
    }
    public static function getAllCustodySpends($pattern = "")
    {
        return CustodySpend::where("responsible", "LIKE", "%$pattern%")
            ->orWhere("money_amount", "LIKE", "%$pattern%")
            ->orWhere("note", "LIKE", "%$pattern%")
            ->latest()
            ->paginate(10);
    }
}
