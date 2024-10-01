<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuantidadeLocal extends Model
{
    protected $table = 'quantidade_local';

    protected $fillable = [
        'quantity',
        'latitude',
        'longitude',
        'nome',
        'uniqueId', 
    ];

    public function registeredDevice()
    {
        return $this->belongsTo(RegisteredDevice::class, 'uniqueId', 'uuid');
    }


}