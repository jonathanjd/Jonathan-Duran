<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VideoController extends Controller
{
    //
    public function __construct()
    {
      # code...
      $this->middleware('auth');
    }

    public function index()
    {
      # code...
      return view('admin.video.index');
    }
}
