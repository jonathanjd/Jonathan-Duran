<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'type_services';

    protected $fillable = ['name','price','time','enable','service_id'];

    public function service()
    {
      # code...

      return $this->belongsTo('App\Service');
    }

    public function features()
    {
      # code...
      return $this->hasMany('App\Feature','type_service_id');
    }
}
