<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
	//
	public function quests() {
		return $this->hasMany('App\Models\Quest');
	}

	public function zoneType() {
		return $this->belongsTo('App\Models\ZoneType', 'type_id');
	}
}
