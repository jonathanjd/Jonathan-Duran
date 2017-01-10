<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    //

    protected $fillable = [
        'name', 'image', 'content','url'
    ];

    public function presupuesto()
    {
      # code...
      return $this->belongsTo('App\Presupuesto');
    }
}
