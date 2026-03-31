<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bikes extends Model
{

    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

        public function images()
    {
        return $this->hasMany(BikeImage::class, 'bike_id', 'id');
    }

    public function getFirstImage()
    {
        return $this->images()->first();
    }
}