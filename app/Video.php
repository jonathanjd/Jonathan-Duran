<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
      'name','image','content','url','course_id'
    ];

    public function course()
    {
      # code...
      return $this->belongsTo('App\Course');
    }
}
