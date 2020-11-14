<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $fillable = [
        'full_name',
        'phone',
        'cpf',
    ];
}
