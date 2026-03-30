<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bikes extends Model
{
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