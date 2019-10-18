<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable=['id','answer','user_id','like','qestion_id'];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
