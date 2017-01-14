<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;

class CourseController extends Controller
{

    public function __construct()
    {
      # code...
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::orderBy('id','DESC')->paginate(4);
        return view('admin.course.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[

            'name' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'

        ]);

        if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $name = 'course-' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/course/';
            $file->move($path,$name);
        }

        $course = new Course($request->all());
        $course->image = $name;
        $course->save();

        flash('Datos Registrados','success');

        return redirect()->route('admin.course.show',$course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $course = Course::find($id);
        return view('admin.course.show')->with('course',$course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course = Course::find($id);
        return view('admin.course.edit')->with('course',$course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[

            'name' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png'

        ]);

        if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $name = 'course-' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/course/';
            $file->move($path,$name);
            $course = Course::find($id);
            $course->fill($request->all());
            $course->image = $name;
            $course->save();
            flash('Datos Editados','success');
            return redirect()->route('admin.course.show',$course->id);
        }else{
          $course = Course::find($id);
          $course->name = $request->name;
          $course->content = $request->content;
          $course->save();
          flash('Datos Editados','success');
          return redirect()->route('admin.course.show',$course->id);
        }
    }

    public function delete($id)
    {
      # code...
      $course = Course::find($id);
      return view('admin.course.delete')->with('course',$course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $course = Course::find($id);
        $course->delete();
        flash('Datos Eliminados','success');
        return redirect()->route('admin.course.index');
    }
}
