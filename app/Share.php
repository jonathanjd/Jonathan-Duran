<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    //
    protected $fillable = ['title','description','image'];

    public function post()
   	{
   		# code...
   		return $this->hasOne('App\Post');
   	}

    public function video()
   	{
   		# code...
   		return $this->hasOne('App\Video');
   	}

    public function course()
   	{
   		# code...
   		return $this->hasOne('App\Course');
   	}

    public function design()
   	{
   		# code...
   		return $this->hasOne('App\Design');
   	}
}
