<?php

namespace App\Repositories\Gallery;

use App\Video;
use App\Course;
use App\Post;
use App\Design;

class GalleryRepository{

  public function allVideo()
  {
    # code...
    return Video::all();
  }

  public function allPost()
  {
    # code...
    return Post::all();
  }

  public function allDesign()
  {
    # code...
    return Design::all();
  }

  public function allCourse()
  {
    # code...
    return Course::all();

  }


}
