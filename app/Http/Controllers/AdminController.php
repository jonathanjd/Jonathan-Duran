<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        # code...
        return view('admin.index');
    }

    public function error404()
    {
      # code...
      return view('admin.404');
    }
}
