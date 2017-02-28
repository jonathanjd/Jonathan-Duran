<?php
namespace App\Repositories\Plan;

use App\Plan;

class PlanRepository {

  public function listTake()
  {
    # code...
    return Plan::orderBy('id','ASC')->take(3)->get();
  }

  public function all()
  {
    # code...
    return Plan::all();
  }

  public function orderBy()
  {
    # code...
    return Plan::orderBy('id','ASC')->get();
  }

  public function findBySlug($id)
  {
    # code...
    return Plan::findBySlug($id);
  }

}
