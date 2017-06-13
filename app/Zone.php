<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    //
    public function quests() {
    	return $this->hasMany('App\Quest');
    }
}
