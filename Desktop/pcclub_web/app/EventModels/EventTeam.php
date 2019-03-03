<?php

namespace App\EventModels;

use Illuminate\Database\Eloquent\Model;

class EventTeam extends Model
{
    //one team consist of many participants
    public function participants()
    {
        return $this->belongsToMany('App\CommonModels\Participant');
    }
}
