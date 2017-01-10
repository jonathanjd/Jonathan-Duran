<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;

class CourseController extends Controller
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
      return view('admin.course.index');
    }

    public function list_course()
    {
      # code...
      $response = Course::all();
      return response()->json($response);
    }
}
