<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    // universities & faculties relation
    public function university() {
        return $this->belongsTo('App\University');
    }

    // faculties & departments relation
    public function departments() {
        return $this->hasMany('App\Department');
    }
}
