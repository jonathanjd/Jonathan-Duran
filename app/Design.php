<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Design extends Model
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
        'name', 'image', 'content','url'
    ];

    public function share()
    {
        return $this->belongsTo('App\Share');
    }
}
