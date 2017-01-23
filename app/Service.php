<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    protected $fillable = [
        'name',
    ];

    public function plans()
    {
      # code...
      return $this->hasMany('App\Plan');
    }
}
