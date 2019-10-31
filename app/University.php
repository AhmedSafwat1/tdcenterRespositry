<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    // users & unviersities relation
    public function users() {
        return $this->hasMany('App\User');
    }

    // universities & faculties relation
    public function faculties() {
        return $this->hasMany('App\Faculty');
    }
}
