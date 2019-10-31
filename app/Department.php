<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // faculties & departments relation
    public function faculty() {
        return $this->belongsTo('App\Faculty');
    }
}
