<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanable extends Model
{
    public function state() {
		return $this->belongsTo('App\State');
	}
	
	public function loan() {
		return $this->hasMany('App\Loan');
	}
	
	public function audiovisualEquipment() {
		return $this->hasOne('App\AudiovisualEquipment');
	}
	
	public function copyPeriodicPublication() {
		return $this->hasOne('App\CopyPeriodicPublication');
	}
	
	public function audiovisualMaterial() {
		return $this->hasOne('App\AudiovisualMaterial');
	}
	
	public function audiovisualEquipment() {
		return $this->hasOne('App\AudiovisualEquipment');
	}
	
	public function cartographicMaterial() {
		return $this->hasOne('App\CartographicMaterial');
	}
	
	public function threeDimensionalObject() {
		return $this->hasOne('App\ThreeDimensionalObject');
	}
}
