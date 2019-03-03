<?php

namespace App\EventModels;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public function guidelines()
    {
        return $this->belongsToMany('App\CommonModels\Guideline');
    }
}
