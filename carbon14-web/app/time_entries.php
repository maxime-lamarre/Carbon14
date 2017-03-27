<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time_entries extends Model
{
    //

    public function time_sheets()
    {
        return $this->hasMany('app\time_sheets');
    }

    public function tasks()
    {
        return $this->hasMany('app\tasks');
    }
}
