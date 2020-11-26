<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'animal_type',
        'costumer_id'
    ];

    public function costumers()
    {
        return $this->belongsTo('App\Model\Costumer', 'costumer_id', 'id');
    }
}
