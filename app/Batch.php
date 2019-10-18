<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable=['id','name','details','user_id','course_id'];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function assignments()
    {
        return $this->hasMany('App\Assignment');
    }

    public function documents()
    {
        return $this->hasMany('App\Document');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
