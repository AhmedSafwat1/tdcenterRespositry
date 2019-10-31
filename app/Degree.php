<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    // users & degrees relation => Note : user might be change his degree ????
    public function users() {
        return $this->hasMany('App\User');
    }
}
