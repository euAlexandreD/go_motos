<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

   class BikeImage extends Model
{



    protected $table = 'bike_images';
    protected $fillable = ['bike_id','image'];

    public function bike()
    {
        return $this->belongsTo(Bikes::class);


    }
}
