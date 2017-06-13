<?php

namespace App\Models;

use App\Models\TranslatableModel;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
	use TranslatableModel;

    //
    public function npc() {
    	return $this->belongsTo('App\Models\NPC');
    }

    public function zone() {
    	return $this->belongsTo('App\Models\Zone');
    }
}
