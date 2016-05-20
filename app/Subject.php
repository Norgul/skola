<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'subject_user', 'subject_id', 'user_id');
    }

    public function grades()
    {
        return $this->belongsToMany('App\Grade', 'grade_subject', 'subject_id', 'grade_id');
    }
}
