<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function offices()
    {
    	return $this->hasMany(Office::class);
    }

    public function getRouteKeyName()
	{
		return 'slug';
	}
}
