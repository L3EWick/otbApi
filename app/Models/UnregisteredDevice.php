<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class UnregisteredDevice extends Model
{

    use SoftDeletes;

    protected $fillable = ['uuid','registered'];
    public $timestamps = true;
}
