<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Person;
use App\Billed_expense;
use App\Not_Billed_expense;
use App\Truck;
use App\Trip_Result;
use App\Route;

class Trip_Fact extends Model
{
    //
    public function people(){
    	return $this->belongsTo(Person::class);
    }
    public function billed_expense(){
    	return $this->hasOne(Billed_expense::class);
    }
    public function not_billed_expense(){
    	return $this->hasOne(Not_Billed_expense::class);
    }
    public function trip_result(){
    	return $this->hasOne(Trip_Result::class);
    }
    public function truck(){
    	return $this->belongsTo(Truck::class);
    }
    public function route(){
    	return $this->belongsTo(Route::class);
    }
}
