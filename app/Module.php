<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    // modules & programs relation
    public function programs() {
        return $this->hasMany('App\Program');
    }
}
