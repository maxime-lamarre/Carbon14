<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //

    public function time_sheets()
    {
        return $this->belongsTo('App\time_sheets');
    }
}
