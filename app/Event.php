<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = [
        "event_start",
        "event_end"
    ];
    public function users() {
        return $this->belongsToMany('App\User',"event_user")->withPivot("status");
    }

    // programs & events relation
    public function program() {
        return $this->belongsTo('App\Program',"program_id");
    }
}
