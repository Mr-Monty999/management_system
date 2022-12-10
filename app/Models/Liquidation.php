<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Liquidation extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function borrows()
    {
        return $this->hasMany(LiquidationBorrow::class);
    }

    public function spends()
    {
        return $this->hasMany(LiquidationSpend::class);
    }
}
