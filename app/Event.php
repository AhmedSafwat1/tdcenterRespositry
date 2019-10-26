<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function users() {
        return $this->belongsToMany('App\User');
    }

    // programs & events relation
    public function program() {
        return $this->belongsTo('App\Program');
    }
}
