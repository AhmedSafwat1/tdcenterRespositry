<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname_en',
        'fname_ar',
        'email',
        'password',
        'gender',
        'birthdate',
        'nationality',
        'national_id',
        'phone_number',
        'home_phone',
        'username',
        'verified',
        'is_deleted',
        'upload_file',
        'university_id',
        'faculty_id',
        'department_id',
        'degree_id',
        'employment_case_id',
        // 'attendance_id',
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
