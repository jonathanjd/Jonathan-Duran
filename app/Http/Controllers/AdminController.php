<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use File;

use App\Video;

use App\Social;

use App\Share;

use App\Course;

use App\Post;

use App\Design;

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
    |                    C   U   R   S   O
    |
    ***********************************************************/

    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaCurso()
    {
      # code...
      # code...
      if (app()->environment() == 'local') {
        # code...
        $path_course = public_path() . '/course/';

      }else {
        # code...
        $path_course = '/home/blogclon/public_html/course/';

      }
      $file_courses = File::allFiles($path_course);

      $courses = $this->galleries->allCourse();

      $arrayCourses = array();

      foreach ($file_courses as $key => $value) {
        # code...
        $arrayCourses[$key]['nameFile'] = $value->getFilename();

        foreach ($courses as $course) {
          # code...
          $arrayCourses[$key]['id'] = $course->id;

          $arrayCourses[$key]['share'] = $course->share_id;

          if ($course->image == $value->getFilename()) {
            # code...
            $arrayCourses[$key]['used'] = true;

            break;

          }else{

            $arrayCourses[$key]['used'] = false;

          }
        }
      }

      return view('admin.gallery.course.course')
              ->with('arrayCourses',$arrayCourses);
    }
    /*=============================
    PROCESO END
    ===============================*/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaShareCourse($id)
    {
      # code...
      $course = Course::find($id);
      if ($course->share_id == null) {
        # code...
        return view('admin.gallery.course.share-course-create')
                ->with('course', $course);
      }else{
        return view('admin.gallery.course.share-course-edit')
                ->with('course', $course);
      }

    }
    /*=============================
    PROCESO END
    ===============================*/



    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaCourseDelete($nameFile)
    {
      # code...
      $this->notFound($nameFile);

      if (app()->environment() == 'local') {
        # code...
        $path_course = public_path() . '/course/';
      }else {
        # code...
        $path_course = '/home/blogclon/public_html/course/';
      }

      File::delete($path_course . $nameFile);

      flash('Imagen Eliminado con Éxito', 'success');

      return redirect()->route('admin-galeria-course');
    }
    /*=============================
    PROCESO END
    ===============================*/



    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaShareCourseStore(Request $request)
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
          $name = 'course-share-' . time() . '.' . $file->getClientOriginalExtension();
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

          $course = Course::find($request->course_id);
          $course->share_id = $share->id;
          $course->share()->associate($share);
          $course->save();

          flash('Datos Registrados','success');

          return redirect()->route('admin-galeria-course');
      }
    }
    /*=============================
    PROCESO END
    ===============================*/



    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaShareCourseUpdate(Request $request, $id)
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
        $name = 'course-share-' . time() . '.' . $file->getClientOriginalExtension();
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
        return redirect()->route('admin-galeria-course');

      }else{

        $share = Share::find($id);
        $share->title = $request->title;
        $share->description = $request->description;
        $share->save();
        flash('Datos Editados','success');
        return redirect()->route('admin-galeria-course');

      }
    }
    /*=============================
    PROCESO END
    ===============================*/

    /**********************************************************
    |
    |                S   E   C   C   I   Ó   N
    |                G   A   L   E   R   I   A
    |                     P   O   S   T
    |
    ***********************************************************/

    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaSharePost($id)
    {
      # code...
      $post = Post::find($id);
      if ($post->share_id == null) {
        # code...
        return view('admin.gallery.post.share-post-create')
                ->with('post', $post);
      }else{
        return view('admin.gallery.post.share-post-edit')
                ->with('post', $post);
      }

    }
    /*=============================
    PROCESO END
    ===============================*/

    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaPost()
    {
      # code...
      if (app()->environment() == 'local') {
        # code...
        $path_post = public_path() . '/post/';

      }else {
        # code...
        $path_post = '/home/blogclon/public_html/post/';

      }
      $file_posts = File::allFiles($path_post);

      $posts = $this->galleries->allPost();

      $arrayPosts = array();

      foreach ($file_posts as $key => $value) {
        # code...
        $arrayPosts[$key]['nameFile'] = $value->getFilename();

        foreach ($posts as $post) {
          # code...
          $arrayPosts[$key]['id'] = $post->id;

          $arrayPosts[$key]['share'] = $post->share_id;

          if ($post->images[0]->name == $value->getFilename()) {
            # code...
            $arrayPosts[$key]['used'] = true;

            break;

          }else{

            $arrayPosts[$key]['used'] = false;

          }
        }

      }

      return view('admin.gallery.post.post')
              ->with('arrayPosts',$arrayPosts);
    }
    /*=============================
    PROCESO END
    ===============================*/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaSharePostStore(Request $request)
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
          $name = 'post-share-' . time() . '.' . $file->getClientOriginalExtension();
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

          $post = Post::find($request->post_id);
          $post->share_id = $share->id;
          $post->enable = true;
          $post->share()->associate($share);
          $post->save();

          flash('Datos Registrados','success');

          return redirect()->route('admin-galeria-post');
      }
    }
    /*=============================
    PROCESO END
    ===============================*/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaSharePostUpdate(Request $request, $id)
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
        $name = 'post-share-' . time() . '.' . $file->getClientOriginalExtension();
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
        return redirect()->route('admin-galeria-post');

      }else{

        $share = Share::find($id);
        $share->title = $request->title;
        $share->description = $request->description;
        $share->save();
        flash('Datos Editados','success');
        return redirect()->route('admin-galeria-post');

      }
    }
    /*=============================
    PROCESO END
    ===============================*/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaPostDelete($nameFile)
    {
      # code...
      $this->notFound($nameFile);

      if (app()->environment() == 'local') {
        # code...
        $path_post = public_path() . '/post/';
      }else {
        # code...
        $path_post = '/home/blogclon/public_html/post/';
      }

      File::delete($path_post . $nameFile);

      flash('Imagen Eliminado con Éxito', 'success');

      return redirect()->route('admin-galeria-post');
    }
    /*=============================
    PROCESO END
    ===============================*/

    /**********************************************************
    |
    |                S   E   C   C   I   Ó   N
    |                G   A   L   E   R   I   A
    |                  D   E   S   I   G   N
    |
    ***********************************************************/

    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaShareDesign($id)
    {
      # code...
      $design = Design::find($id);
      if ($design->share_id == null) {
        # code...
        return view('admin.gallery.design.share-design-create')
                ->with('design', $design);
      }else{
        return view('admin.gallery.design.share-design-edit')
                ->with('design', $design);
      }

    }
    /*=============================
    PROCESO END
    ===============================*/

    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaDesign()
    {
      # code...
      if (app()->environment() == 'local') {
        # code...
        $path_design = public_path() . '/design/';

      }else {
        # code...
        $path_design = '/home/blogclon/public_html/design/';

      }
      $file_designs = File::allFiles($path_design);

      $designs = $this->galleries->allDesign();

      $arrayDesigns = array();

      foreach ($file_designs as $key => $value) {
        # code...
        $arrayDesigns[$key]['nameFile'] = $value->getFilename();

        foreach ($designs as $design) {
          # code...
          $arrayDesigns[$key]['id'] = $design->id;

          $arrayDesigns[$key]['share'] = $design->share_id;

          if ($design->image == $value->getFilename()) {
            # code...
            $arrayDesigns[$key]['used'] = true;

            break;

          }else{

            $arrayDesigns[$key]['used'] = false;

          }
        }

      }

      return view('admin.gallery.design.design')
              ->with('arrayDesigns',$arrayDesigns);
    }
    /*=============================
    PROCESO END
    ===============================*/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaShareDesignStore(Request $request)
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
          $name = 'design-share-' . time() . '.' . $file->getClientOriginalExtension();
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

          $design = Design::find($request->design_id);
          $design->share_id = $share->id;
          $design->enable = true;
          $design->share()->associate($share);
          $design->save();

          flash('Datos Registrados','success');

          return redirect()->route('admin-galeria-design');
      }
    }
    /*=============================
    PROCESO END
    ===============================*/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaShareDesignUpdate(Request $request, $id)
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
        $name = 'design-share-' . time() . '.' . $file->getClientOriginalExtension();
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
        return redirect()->route('admin-galeria-design');

      }else{

        $share = Share::find($id);
        $share->title = $request->title;
        $share->description = $request->description;
        $share->save();
        flash('Datos Editados','success');
        return redirect()->route('admin-galeria-design');

      }
    }
    /*=============================
    PROCESO END
    ===============================*/


    /*=============================
    PROCESO START
    ===============================*/
    public function galeriaDesignDelete($nameFile)
    {
      # code...
      $this->notFound($nameFile);

      if (app()->environment() == 'local') {
        # code...
        $path_design = public_path() . '/design/';
      }else {
        # code...
        $path_design = '/home/blogclon/public_html/design/';
      }

      File::delete($path_design . $nameFile);

      flash('Imagen Eliminado con Éxito', 'success');

      return redirect()->route('admin-galeria-design');
    }
    /*=============================
    PROCESO END
    ===============================*/


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


    /*=============================
    PROCESO START
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
    PROCESO END
    ===============================*/


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
