<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function county()
    {
    	return $this->belongsTo(County::class);
    }
}
