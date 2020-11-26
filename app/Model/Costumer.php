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

    public function animals()
    {
        return $this->hasMany('App\Model\Animal', 'costumer_id', 'id');
    }
}
