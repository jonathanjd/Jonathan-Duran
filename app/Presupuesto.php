<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    //
    protected $fillable = [
        'customer', 'email', 'message','total',
    ];

    public function design()
    {
      # code...
      return $this->hasOne('App\Design');
    }
}
