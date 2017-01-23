<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //
    protected $table = 'feature_services';

    protected $fillable = ['description','type_service_id'];


    public function plan()
    {
      # code...

      return $this->belongsTo('App\Plan','type_service_id');
    }

}
