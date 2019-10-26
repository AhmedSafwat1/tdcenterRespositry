<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    // modules & programs relation
    public function module() {
        return $this->belongsTo('App\Module');
    }

    // programs & events relation
    public function events() {
        return $this->hasMany('App\Event');
    }
}
