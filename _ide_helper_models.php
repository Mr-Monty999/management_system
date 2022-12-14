<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models {
	/**
	 * App\Models\Custody
	 *
	 * @property int $id
	 * @property string $money_amount
	 * @property string $receiver
	 * @property string $sender
	 * @property string|null $date
	 * @property string|null $note
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustodyBorrow[] $borrows
	 * @property-read int|null $borrows_count
	 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CustodySpend[] $spends
	 * @property-read int|null $spends_count
	 * @method static \Database\Factories\CustodyFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody newQuery()
	 * @method static \Illuminate\Database\Query\Builder|Custody onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody query()
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereMoneyAmount($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereReceiver($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereSender($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Custody whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|Custody withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|Custody withoutTrashed()
	 */
	class Custody extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\CustodyBorrow
	 *
	 * @property int $id
	 * @property float $money_amount
	 * @property string $date
	 * @property string|null $note
	 * @property int $custody_id
	 * @property int $person_id
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\CustodyBorrowFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow newQuery()
	 * @method static \Illuminate\Database\Query\Builder|CustodyBorrow onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow query()
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow whereCustodyId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow whereMoneyAmount($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow wherePersonId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodyBorrow whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|CustodyBorrow withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|CustodyBorrow withoutTrashed()
	 */
	class CustodyBorrow extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\CustodySpend
	 *
	 * @property int $id
	 * @property string $type
	 * @property float $money_amount
	 * @property string $date
	 * @property string|null $note
	 * @property int $custody_id
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\CustodySpendFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend newQuery()
	 * @method static \Illuminate\Database\Query\Builder|CustodySpend onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend query()
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereCustodyId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereMoneyAmount($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereType($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|CustodySpend whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|CustodySpend withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|CustodySpend withoutTrashed()
	 */
	class CustodySpend extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\Person
	 *
	 * @property int $id
	 * @property string $name
	 * @property string $gender
	 * @property string|null $birth_date
	 * @property string|null $hire_date
	 * @property float|null $salary
	 * @property int|null $national_number
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\PersonFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|Person newQuery()
	 * @method static \Illuminate\Database\Query\Builder|Person onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|Person query()
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereBirthDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereGender($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereHireDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereName($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereNationalNumber($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereSalary($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Person whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|Person withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|Person withoutTrashed()
	 */
	class Person extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\PersonBorrow
	 *
	 * @property int $id
	 * @property float $money_amount
	 * @property string $date
	 * @property string|null $note
	 * @property int $person_id
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\PersonBorrowFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow newQuery()
	 * @method static \Illuminate\Database\Query\Builder|PersonBorrow onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow query()
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow whereMoneyAmount($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow wherePersonId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonBorrow whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|PersonBorrow withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|PersonBorrow withoutTrashed()
	 */
	class PersonBorrow extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\PersonWorkTime
	 *
	 * @property int $id
	 * @property int $is_present
	 * @property string|null $date
	 * @property string|null $note
	 * @property int $person_id
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\PersonWorkTimeFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime newQuery()
	 * @method static \Illuminate\Database\Query\Builder|PersonWorkTime onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime query()
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime whereIsPresent($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime wherePersonId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|PersonWorkTime whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|PersonWorkTime withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|PersonWorkTime withoutTrashed()
	 */
	class PersonWorkTime extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\Stock
	 *
	 * @property int $id
	 * @property string $name
	 * @property int $type
	 * @property string $receiver
	 * @property string $sender
	 * @property string|null $date
	 * @property string|null $note
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\StockFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock newQuery()
	 * @method static \Illuminate\Database\Query\Builder|Stock onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock query()
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereName($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereReceiver($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereSender($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereType($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|Stock withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|Stock withoutTrashed()
	 */
	class Stock extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\User
	 *
	 * @property int $id
	 * @property string $name
	 * @property string $email
	 * @property \Illuminate\Support\Carbon|null $email_verified_at
	 * @property string $password
	 * @property string|null $remember_token
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
	 * @property-read int|null $notifications_count
	 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
	 * @property-read int|null $tokens_count
	 * @method static \Database\Factories\UserFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
	 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|User query()
	 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
	 */
	class User extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\Vehicle
	 *
	 * @property int $id
	 * @property string $name
	 * @property int $number
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\VehicleFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
	 * @method static \Illuminate\Database\Query\Builder|Vehicle onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereName($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereNumber($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Query\Builder|Vehicle withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|Vehicle withoutTrashed()
	 */
	class Vehicle extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\VehicleFuel
	 *
	 * @property int $id
	 * @property string $driver
	 * @property int $fuel_quantity
	 * @property string $date
	 * @property string|null $note
	 * @property int $vehicle_id
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\VehicleFuelFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel newQuery()
	 * @method static \Illuminate\Database\Query\Builder|VehicleFuel onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel query()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereDriver($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereFuelQuantity($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleFuel whereVehicleId($value)
	 * @method static \Illuminate\Database\Query\Builder|VehicleFuel withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|VehicleFuel withoutTrashed()
	 */
	class VehicleFuel extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\VehicleMaintenance
	 *
	 * @property int $id
	 * @property string $responsible
	 * @property float $money_amount
	 * @property string $date
	 * @property string|null $note
	 * @property int $vehicle_id
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\VehicleMaintenanceFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance newQuery()
	 * @method static \Illuminate\Database\Query\Builder|VehicleMaintenance onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance query()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereMoneyAmount($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereResponsible($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleMaintenance whereVehicleId($value)
	 * @method static \Illuminate\Database\Query\Builder|VehicleMaintenance withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|VehicleMaintenance withoutTrashed()
	 */
	class VehicleMaintenance extends \Eloquent
	{
	}
}

namespace App\Models {
	/**
	 * App\Models\VehicleWorkTime
	 *
	 * @property int $id
	 * @property int $is_present
	 * @property string $driver
	 * @property string|null $note
	 * @property string $date
	 * @property int $vehicle_id
	 * @property \Illuminate\Support\Carbon|null $deleted_at
	 * @property \Illuminate\Support\Carbon|null $created_at
	 * @property \Illuminate\Support\Carbon|null $updated_at
	 * @method static \Database\Factories\VehicleWorkTimeFactory factory(...$parameters)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime newModelQuery()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime newQuery()
	 * @method static \Illuminate\Database\Query\Builder|VehicleWorkTime onlyTrashed()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime query()
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereDate($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereDriver($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereIsPresent($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereNote($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|VehicleWorkTime whereVehicleId($value)
	 * @method static \Illuminate\Database\Query\Builder|VehicleWorkTime withTrashed()
	 * @method static \Illuminate\Database\Query\Builder|VehicleWorkTime withoutTrashed()
	 */
	class VehicleWorkTime extends \Eloquent
	{
	}
}
