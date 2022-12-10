<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonBorrow extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
