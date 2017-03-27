<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    //

    public function time_entries()
    {
        return $this->belongsTo('App\time_entries');
    }

     public function categories()
    {
        return $this->belongsTo('App\categories');
    }
}
