<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'price',
        'category_id',
    ];

    public function categories()
    {
        return $this->hasMany('App\Model\Category');
    }

      public function sale(){
        return $this->belongsTo('App\Model\Sale');
    }


}