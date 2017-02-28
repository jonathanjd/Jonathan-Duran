<?php
namespace App\Repositories\Category;

use App\Category;

class CategoryRepository {

  public function categoryList()
  {
    # code...
    return Category::orderBy('id','asc')->paginate(5);
  }

}
