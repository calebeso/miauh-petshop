<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    protected $fillable = [
      'description', 'price',
    ];

    public $timestamps = false;
}
