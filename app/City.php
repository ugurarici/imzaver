<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function counties()
    {
    	return $this->hasMany(County::class);
    }

    public function offices()
    {
    	return $this->hasMany(Office::class);
    }
}
