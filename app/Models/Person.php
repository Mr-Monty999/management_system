<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];


    public function borrows()
    {
        return $this->hasMany(PersonBorrow::class);
    }

    public function workTimes()
    {
        return $this->hasMany(PersonWorkTime::class);
    }
}
