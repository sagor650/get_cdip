<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
//    protected $fillable=['id','name','details','dead_line','instructor_attachment','student_submit'];

    public function documentAttachments()
    {
        return $this->hasMany('App\DocumentAttachment');
    }

    public function batch()
    {
        return $this->belongsTo('App\Batch');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
