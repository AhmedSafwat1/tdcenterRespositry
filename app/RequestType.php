<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    // request_types & requests relation
    public function requests() {
        return $this->hasMany('App\Request');
    }
}
