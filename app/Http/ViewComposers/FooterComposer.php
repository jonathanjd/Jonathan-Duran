<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Social;

class FooterComposer {


  public function compose(View $view)
  {
    # code...
    $social = Social::all();
    $social = $social->last();
    $view->with('social', $social);
  }

}
