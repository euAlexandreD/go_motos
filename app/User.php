<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function bike()
    {
        return $this->hasMany(Bikes::class);
    }
}