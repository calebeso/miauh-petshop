<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'animal_type',
    ];

    public function costumer()
    {
        return $this->belongsTo('App\Model\Costumer');
    }
}
