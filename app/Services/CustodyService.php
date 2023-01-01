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
    // public static function getAllCustodiesByType($pattern = "", $type)
    // {

    //     return Custody::where("type", '=', $type)
    //         ->where(function ($q) use ($pattern) {
    //             $q->orWhere("name", "LIKE", "%$pattern%")
    //                 ->orWhere("sender", "LIKE", "%$pattern%")
    //                 ->orWhere("receiver", "LIKE", "%$pattern%")
    //                 ->orWhere("count", "LIKE", "%$pattern%")
    //                 ->orWhere("note", "LIKE", "%$pattern%");
    //         })
    //         ->latest()
    //         ->paginate(10);
    // }
    public static function getAllCustodies($pattern = "")
    {
        return Custody::withSum([
            "borrows",
            "spends" => function ($q) {
                $q->where("type", "maiz");
            },
            "spends" => function ($q) {
                $q->where("type", "others");
            }

        ], "money_amount")
            ->where("money_amount", "LIKE", "%$pattern%")
            ->orWhere("sender", "LIKE", "%$pattern%")
            ->orWhere("receiver", "LIKE", "%$pattern%")
            ->orWhere("note", "LIKE", "%$pattern%")
            ->latest()
            ->paginate(10);
    }
    public static function getAllCustodyBorrowSum($custodyId)
    {
        return CustodyBorrow::where("custody_id", $custodyId)
            ->sum("money_amount");
    }
    public static function getAllCustodySpendSum($custodyId)
    {
        return CustodySpend::where("custody_id", $custodyId)
            ->sum("money_amount");
    }
}
