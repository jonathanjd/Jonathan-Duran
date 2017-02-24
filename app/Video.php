<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Video extends Model
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
      'name','image','content','url','course_id'
    ];

    public function course()
    {
      # code...
      return $this->belongsTo('App\Course');
    }
}
