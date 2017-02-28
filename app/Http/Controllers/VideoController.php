<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;

use App\Video;

class VideoController extends Controller
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
        $videos = Video::orderBy('id','DESC')->paginate('5');
        return view('admin.video.index')->with('videos',$videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::all();
        return view('admin.video.create')->with('courses',$courses);
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
            'url' => 'required|url',
            'course_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'

        ]);

        if ($request->file('image')) {
            # code...
            $file = $request->file('image');
            $name = 'video-' . time() . '.' . $file->getClientOriginalExtension();
            if (app()->environment() == 'local') {
              # code...
              $path = public_path() . '/video/';
            }else {
              # code...
              $path = '/home/blogclon/public_html/video/';
            }
            $file->move($path,$name);
        }

        $video = new Video($request->all());
        $video->image = $name;
        $video->save();

        flash('Datos Registrados','success');

        return redirect()->route('admin.video.show',$video->id);
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
        $video = Video::find($id);
        $this->notFound($video);
        return view('admin.video.show')->with('video',$video);
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
        $courses = Course::all();
        $video = Video::find($id);
        $this->notFound($video);
        return view('admin.video.edit')->with('video',$video)->with('courses',$courses);
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
            'url' => 'required|url',
            'course_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png'

        ]);

        if ($request->file('image')) {
            //En caso de Actualizar Image de Video
            # code...
            $file = $request->file('image');
            $name = 'video-' . time() . '.' . $file->getClientOriginalExtension();
            if (app()->environment() == 'local') {
              # code...
              $path = public_path() . '/video/';
            }else {
              # code...
              $path = '/home/blogclon/public_html/video/';
            }
            $file->move($path,$name);
            $video = Video::find($id);
            $this->notFound($video);
            $video->slug = null;
            $video->fill($request->all());
            $video->image = $name;
            $video->save();
            flash('Datos Editados','success');
            return redirect()->route('admin.video.show',$video->id);
        }else{
            //En caso de NO Actualizar Image de Video
            $video = Video::find($id);
            $this->notFound($video);
            $video->slug = null;
            $video->name = $request->name;
            $video->content = $request->content;
            $video->url = $request->url;
            $video->course_id = $request->course_id;
            $video->save();

            flash('Datos Editados','success');
            return redirect()->route('admin.video.show',$video->id);
        }
    }

    public function delete($id)
    {
        # code...
        $video = Video::find($id);
        $this->notFound($video);
        return view('admin.video.delete')->with('video',$video);
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
        $video = Video::find($id);
        $this->notFound($video);
        $video->delete();
        flash('Datos Eliminados','success');
        return redirect()->route('admin.video.index');
    }
}
