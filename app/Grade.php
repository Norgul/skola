<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'grade_user', 'grade_id', 'user_id');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'grade_subject', 'grade_id', 'subject_id');
    }
}
