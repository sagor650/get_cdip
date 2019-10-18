<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['id','qus_title','view_count','like_count','user_id','course_id'];

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
