<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Course extends Model
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
    protected $fillable = [
      'name','image','content'
    ];

    public function videos()
    {
      # code...
      return $this->hasMany('App\Video');
    }

    public function share()
    {
        return $this->belongsTo('App\Share');
    }
}
