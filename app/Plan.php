<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Plan extends Model
{

    use Sluggable;

    use SluggableScopeHelpers;

    public function sluggable()
    {
      return [
          'slug' => [
              'source' => 'name'
          ]
      ];
    }


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
