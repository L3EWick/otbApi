<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisteredDevice extends Model
{
    protected $fillable = ['uuid', 'cpf', 'nome', 'telefone'];
    public $timestamps = true; 
}