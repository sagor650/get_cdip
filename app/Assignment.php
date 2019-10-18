<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable=['id','name','details','dead_line','instructor_attachment','student_submit'];

    public function batch()
    {
        return $this->belongsTo('App\Batch');
    }

    public function assignment_submit()
    {
        return $this->hasOne('App\Assignment_submit');
    }
}
