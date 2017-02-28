@extends('admin.base-main')

@section('title','Galería')

@section('title-content-1','Galería Video Admin')

@section('main_content')

  @include('admin.message')

  <div class="row">

    <ol class="breadcrumb">
      <li><a href="{{ route('admin-galeria') }}">Galería</a></li>
      <li class="active">Galería de Video</li>
    </ol>
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
                      @foreach ($arrayVideos as $video)

                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('video/'.$video['nameFile']) }}" alt="image" />
                                    <div class="mask">
                                        <p>Opciones</p>
                                        <div class="tools tools-bottom">
                                            <a href="#"><i class="fa fa-link"></i></a>

                                            @if (!$video['used'] == true)
                                              <a href="{{ route('admin-galeria-video-delete',$video['nameFile']) }}"><i class="fa fa-times"></i></a>
                                            @else
                                              <a href="{{ route('admin.video.edit',$video['id']) }}"><i class="fa fa-pencil"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <p>Imagen de Video</p>
                                    @if ($video['used'] == true)
                                      @if ($video['share'] == null)
                                        <a href="{{ route('admin-galeria-share-image-video',$video['id']) }}" class="btn btn-danger btn-sm"><i class="fa fa-facebook"></i></a>
                                      @else
                                        <a href="{{ route('admin-galeria-share-image-video',$video['id']) }}" class="btn btn-success btn-sm"><i class="fa fa-facebook"></i></a>
                                      @endif
                                      <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                    @else
                                      <a href="#" class="btn btn-danger btn-sm" disabled="disabled"><i class="fa fa-facebook"></i></a>
                                      <a href="#" class="btn btn-danger btn-sm" disabled="disabled"><i class="fa fa-check"></i></a>
                                    @endif

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
