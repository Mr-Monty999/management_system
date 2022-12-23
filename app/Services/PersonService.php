<?php

namespace App\Services;

use App\Models\Person;
use App\Models\PersonBorrow;
use App\Models\PersonWorkTime;

/**
 * Class PersonService.
 */
class PersonService
{


    public static function personUnAttendTimesCount($personId)
    {

        return PersonWorkTime::where("person_id", $personId)
            ->where(
                "is_present",
                0
            )
            ->count();
    }
    public static function personWorkTimesCount($personId)
    {
        return PersonWorkTime::where("person_id", $personId)
            ->where("is_present", 1)
            ->count();
    }

    public static function personBorrowsSum($personId)
    {

        return PersonBorrow::where("person_id", $personId)
            ->sum("money_amount");
    }
}
