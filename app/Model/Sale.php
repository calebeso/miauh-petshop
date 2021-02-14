<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'product_id', 'user_id', 'service_id', 'costumer_id', 'total'
    ];


    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }

    public function users()
    {
        return $this->hasMany('App\Model\User');
    }

    public function services()
    {
        return $this->hasMany('App\Model\Service');
    }

    public function costumers()
    {
        return $this->hasMany('App\Model\Costumer');
    }

}