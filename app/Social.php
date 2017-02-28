<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    //
    protected $fillable = [
        'correo', 'facebook', 'twitter','youtube','google','linkedin','pinterest',
        'instagram','tumblr'
    ];

}
