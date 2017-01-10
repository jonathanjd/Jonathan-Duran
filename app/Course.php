<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
      'name','image','content'
    ];

    public function videos()
    {
      # code...
      return $this->hasMany('App\Video');
    }
}
