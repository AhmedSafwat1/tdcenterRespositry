<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    /**
     * Get the user that owns the request.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
