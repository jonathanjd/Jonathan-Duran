<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
   	protected $fillable = ['title','content','user_id','category_id'];

   	public function category()
   	{
   		# code...
   		return $this->belongsTo('App\Category');
   	}

   	public function user()
   	{
   		# code...
   		return $this->belongsTo('App\User');
   	}

   	public function images()
   	{
   		# code...
   		return $this->hasMany('App\Image');
   	}

   	public function tags()
   	{
   		# code...
   		return $this->belongsToMany('App\Tag');
   	}
}
