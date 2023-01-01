<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustodySpend extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function custody()
    {
        return $this->belongsTo(Custody::class);
    }
}
