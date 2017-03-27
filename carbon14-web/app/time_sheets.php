<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time_sheets extends Model
{
    //

    /**
     * Get the products for the brand.
     */
    public function users()
    {
        return $this->hasMany('app\users');
    }

    public function time_entries()
    {
        return $this->belongsTo('App\time_entries');
    }
}
