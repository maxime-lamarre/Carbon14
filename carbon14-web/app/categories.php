<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //

    public function tasks()
    {
        return $this->hasMany('app\tasks');
    }
}
