<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Taha edits //

    // ...->hasOne(
        //      model,
        //      column_name_in__table_containing_the_reference_to_users,
        //      column_name_of_users_containing_identifier
        //      )


    public function requests()
    {
        return $this->hasMany('App\request');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }

    public function equivelent_certificates()
    {
        return $this->hasMany('App\equivelent_certificate');
    }

    public function event_attendance()
    {
        return $this->hasMany('App\event_attendance','user_id','id'); // id in the user's table
    }

    public function university()
    {
        return $this->hasOne('App\University','id','uni_id');
    }
    public function faculty()
    {
        return $this->hasOne('App\Faculty','id','fac_id');
    }

    public function major()
    {
        return $this->hasOne('App\Major','id','major_id');
    }
    public function department()
    {
        return $this->hasOne('App\department','id','dep_id');
    }
}
