<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trip_Fact;

class Truck extends Model
{
    //
	public function trip_fact(){
    	return $this->hasMany(Trip_Fact::class);
    }
}
