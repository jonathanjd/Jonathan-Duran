<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use File;

use App\Video;

use App\Social;

use App\Share;

use App\Repositories\Gallery\GalleryRepository;

class AdminController extends Controller
{
    //
    protected $galleries;

    public function __construct(GalleryRepository $galleries)
    {
        $this->middleware('auth');
        $this->galleries = $galleries;
    }

    public function index()
    {
        # code...
        return view('admin.index');
    }

    public function option()
    {
        # code...
        return view('admin.option');
    }

    /**********************************************************
    |
    |                S   E   C   C   I   Ó   N
    |                G   A   L   E   R   I   A
    |
    ***********************************************************/

    public function galeria()
    {
        # code...
        /*******************************************************
                            P   O   S   T
        ********************************************************/
        if (app()->environment() == 'local') {
          # code...
          $path_post = public_path() . '/post/';
        }else {
          # code...
          $path_post = '/home/blogclon/public_html/post/';
        }
        $file_posts = File::allFiles($path_post);

        /*******************************************************
                          D   E    S   I   G   N
        ********************************************************/
        if (app()->environment() == 'local') {
          # code...
          $path_design = public_path() . '/design/';
        }else {
          # code...
          $path_design = '/home/blogclon/public_html/design/';
        }
        $file_designs = File::allFiles($path_design);

        /*******************************************************
                          C   O   U   R   S   E
        ********************************************************/

        if (app()->environment() == 'local') {
          # code...
          $path_course = public_path() . '/course/';
        }else {
          # code...
          $path_course = '/home/blogclon/public_html/course/';
        }
        $file_courses = File::allFiles($path_course);


        /*============================================
                        V   I   S   T   A
        ==============================================*/
        return view('admin.gallery.index')
                ->with('posts', $this->galleries->allPost())
                ->with('designs', $this->galleries->allDesign())
                ->with('courses', $this->galleries->allCourse())
                ->with('videos', $this->galleries->allVideo());
    }




    /**********************************************************
    |
    |                S   E   C   C   I   Ó   N
    |                G   A   L   E   R   I   A
    |                   V   I   D   E   O
    |
    ***********************************************************/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaShareVideo($id)
    {
      # code...
      $video = Video::find($id);
      if ($video->share_id == null) {
        # code...
        return view('admin.gallery.video.share-video-create')
                ->with('video', $video);
      }else{
        return view('admin.gallery.video.share-video-edit')
                ->with('video', $video);
      }

    }
    /*=============================
    PROCESO END
    ===============================*/

    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaVideo()
    {
      # code...
      if (app()->environment() == 'local') {
        # code...
        $path_video = public_path() . '/video/';

      }else {
        # code...
        $path_video = '/home/blogclon/public_html/video/';

      }
      $file_videos = File::allFiles($path_video);

      $videos = $this->galleries->allVideo();

      $arrayVideos = array();

      foreach ($file_videos as $key => $value) {
        # code...
        $arrayVideos[$key]['nameFile'] = $value->getFilename();

        foreach ($videos as $video) {
          # code...
          $arrayVideos[$key]['id'] = $video->id;

          $arrayVideos[$key]['share'] = $video->share_id;

          if ($video->image == $value->getFilename()) {
            # code...
            $arrayVideos[$key]['used'] = true;

            break;

          }else{

            $arrayVideos[$key]['used'] = false;

          }
        }

      }

      return view('admin.gallery.video.video')
              ->with('arrayVideos',$arrayVideos);
    }
    /*=============================
    PROCESO END
    ===============================*/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaShareVideoStore(Request $request)
    {
      # code...

      $this->validate($request,[
          'title' => 'required',
          'description' => 'required',
          'image' => 'mimes:jpeg,jpg,png'
      ]);

      if ($request->file('image')) {
          # code...
          $file = $request->file('image');
          $name = 'video-share-' . time() . '.' . $file->getClientOriginalExtension();
          if (app()->environment() == 'local') {
            # code...
            $path = public_path() . '/share/';
          }else {
            # code...
            $path = '/home/blogclon/public_html/share/';
          }
          $file->move($path,$name);

          $share = new Share($request->all());
          $share->image = $name;
          $share->save();

          $video = Video::find($request->video_id);
          $video->share_id = $share->id;
          $video->share()->associate($share);
          $video->save();

          flash('Datos Registrados','success');

          return redirect()->route('admin-galeria-video');
      }
    }
    /*=============================
    PROCESO END
    ===============================*/

    public function galeriaShareVideoUpdate(Request $request, $id)
    {
      # code...

      $this->validate($request,[
          'title' => 'required',
          'description' => 'required',
          'image' => 'mimes:jpeg,jpg,png'
      ]);


      if ($request->file('image')) {
        # code...
        $file = $request->file('image');
        $name = 'video-share-' . time() . '.' . $file->getClientOriginalExtension();
        if (app()->environment() == 'local') {
          # code...
          $path = public_path() . '/share/';
        }else {
          # code...
          $path = '/home/blogclon/public_html/share/';
        }
        $file->move($path,$name);

        $share = Share::find($id);
        $share->fill($request->all());
        $share->image = $name;
        $share->save();
        flash('Datos Editados','success');
        return redirect()->route('admin-galeria-video');

      }else{

        $share = Share::find($id);
        $share->title = $request->title;
        $share->description = $request->description;
        $share->save();
        flash('Datos Editados','success');
        return redirect()->route('admin-galeria-video');

      }
    }


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaVideoDelete($nameFile)
    {
      # code...
      $this->notFound($nameFile);

      if (app()->environment() == 'local') {
        # code...
        $path_video = public_path() . '/video/';
      }else {
        # code...
        $path_video = '/home/blogclon/public_html/video/';
      }

      File::delete($path_video . $nameFile);

      flash('Imagen Eliminado con Éxito', 'success');

      return redirect()->route('admin-galeria-video');
    }
    /*=============================
    PROCESO END
    ===============================*/





    /**********************************************************
    |
    |                S   E   C   C   I   Ó   N
    |                   S   O   C   I   A   L
    |
    ***********************************************************/


    /*================================
                social START
    ==================================*/
    public function social()
    {
      # code...
      return view('admin.social.index');
    }
    /*================================
                social END
    ==================================*/


    /*================================
            socialSaveAjax START
    ==================================*/
    public function socialSaveAjax(Request $request)
    {
      # code...
      if ($request->ajax()) {
        # code...
        $social = Social::all();

        if ($social->isEmpty()) {
          # code...
          $social = new Social($request->all());
          $social->save();
          return response()->json($request->all());

        }else{

          $social_data = $social->last();
          $social = Social::find($social_data->id);
          $social->fill($request->all());
          $social->save();
          return response()->json($request->all());

        }
      }
    }
    /*================================
            socialSaveAjax END
    ==================================*/



    /*================================
           socialShowAjax START
    ==================================*/
    public function socialShowAjax()
    {
      # code...
      $social = Social::all();
      if ($social->isEmpty()) {
        # code...
        return response()->json(['mensaje' => true]);
      }else{
        $social = $social->last();
        return response()->json($social);
      }

    }
    /*================================
           socialShowAjax END
    ==================================*/


}
