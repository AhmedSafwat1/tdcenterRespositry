<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploymentCase extends Model
{
    // emp_cases & users relation => Note : user might be change his employment case ????
    public function users() {
        return $this->hasMany('App\User');
    }
}
