<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentAttachment extends Model
{
    //
//    protected $fillable=['id','name','details','dead_line','instructor_attachment','student_submit'];

    public function document()
    {
        return $this->belongsTo('App\Document');
    }
}
