@extends('admin.base-main')

@section('title','Galería')

@section('title-content-1','Galería Admin')

@section('main_content')

  <div class="row">
      <div class="col-md-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Galería Media<small> De Post </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Settings 1</a>
                              </li>
                              <li><a href="#">Settings 2</a>
                              </li>
                          </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">

                  <div class="row">
                      <p class="text-center">Elementos</p>
                      @foreach ($file_posts as $file_post)
                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('post/'.$file_post->getFilename()) }}" alt="image" />
                                    <div class="mask">
                                        <p>Opciones</p>
                                        <div class="tools tools-bottom">
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <p>Imagen de Post</p>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-check"></i></a>
                                </div>
                            </div>
                        </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Galería Media<small> De Diseño </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Settings 1</a>
                              </li>
                              <li><a href="#">Settings 2</a>
                              </li>
                          </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">

                  <div class="row">
                      <p class="text-center">Elementos</p>
                      @foreach ($file_designs as $file_design)
                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('design/'.$file_design->getFilename()) }}" alt="image" />
                                    <div class="mask">
                                        <p>Opciones</p>
                                        <div class="tools tools-bottom">
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <p>Imagen de Diseño</p>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-check"></i></a>
                                </div>
                            </div>
                        </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Galería Media<small> De Curso </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Settings 1</a>
                              </li>
                              <li><a href="#">Settings 2</a>
                              </li>
                          </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">

                  <div class="row">
                      <p class="text-center">Elementos</p>
                      @foreach ($file_courses as $file_course)
                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('course/'.$file_course->getFilename()) }}" alt="image" />
                                    <div class="mask">
                                        <p>Opciones</p>
                                        <div class="tools tools-bottom">
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <p>Imagen de Curso</p>
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-check"></i></a>
                                </div>
                            </div>
                        </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Galería Media<small> De Video </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Settings 1</a>
                              </li>
                              <li><a href="#">Settings 2</a>
                              </li>
                          </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">

                  <div class="row">
                      <p class="text-center">Elementos</p>
                      @foreach ($file_videos as $file_video)
                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('video/'.$file_video->getFilename()) }}" alt="image" />
                                    <div class="mask">
                                        <p>Opciones</p>
                                        <div class="tools tools-bottom">
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <p>Imagen de Video</p>
                                    @foreach ($videos as $video)
                                      @if ($video->image == $file_video->getFilename())
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                      @else
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-check"></i></a>
                                      @endif
                                    @endforeach

                                </div>
                            </div>
                        </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
