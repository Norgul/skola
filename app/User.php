<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
        'email',
        'phone_home',
        'phone_work',
        'phone_private',
        'city',
        'address',
        'email_private',
        'oib',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\User', 'role_user', 'user_id', 'role_id');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'subject_user', 'user_id', 'subject_id');
    }

    public function grades()
    {
        return $this->belongsToMany('App\Grade', 'grade_user', 'user_id', 'grade_id');
    }

    public function subjectList()
    {
        return $this->subjects()->lists('id');
    }

    public function getSubjectListAttribute()
    {
        return $this->subjectList()->toArray();
    }
}
