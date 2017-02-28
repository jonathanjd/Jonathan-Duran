<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Service;

class HeaderComposer {


  public function compose(View $view)
  {
    # code...
    $services = Service::orderBy('id','ASC')->get();
    $view->with('services', $services);
  }

}
