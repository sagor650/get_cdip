<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable=['id','name','details','user_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function batches()
    {
        return $this->hasMany('App\Batch');
    }
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

}
