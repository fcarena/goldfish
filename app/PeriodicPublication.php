<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodicPublication extends Model
{
    public function copyPeriodicPublication() {
		return $this->hasMany('App\CopyPeriodicPublication');
	}
}
