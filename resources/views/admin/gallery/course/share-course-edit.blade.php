@extends('admin.base-main')

@section('title','Galería Share')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/bootstrap_file_field.css') }}">
  <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('title-content-1','Galería Share Admin')

@section('main_content')

  <div class="row">

    <ol class="breadcrumb">
      <li><a href="{{ route('admin-galeria') }}">Galería</a></li>
      <li><a href="{{ route('admin-galeria-course') }}">Galería de Course</a></li>
      <li class="active">Course Image Share</li>
    </ol>

      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
              <h2>Share Image<small> Course</small></h2>
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

            @include('admin.message')

            <h3 class="text-center">Formulario</h3>

            <img class="img img-responsive img-rounded" src="{{ asset('share/'.$course->share->image) }}" alt="">

            {!! Form::open(['route' => ['admin-galeria-share-image-course-update', $course->share->id],'method' => 'PUT','files' => true,'data-parsley-validate' => '']) !!}

            <div class="form-group">
              {!! Form::label('title','Title:',['class' => 'control-label']) !!}
              {!! Form::text('title', $course->share->title,['class' => 'form-control', 'required' => '']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('description','Description:',['class' => 'control-label']) !!}
              {!! Form::text('description', $course->share->description,['class' => 'form-control', 'required' => '']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image','Image:',['class' => 'control-label']) !!}
                <input type="file" name="image" value="" data-field-type="bootstrap-file-filed" data-preview="on" data-file-types="image/jpeg,image/png,image" data-btn-class="btn-primary" data-parsley-dimensions-options="{'width':'1200','height':'630'}">
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar"><i class="fa fa-save"></i></button>
            </div>

            {!! Form::close() !!}
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
              <h2>My Image<small> Course</small></h2>
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

            <img class="img img-responsive img-rounded" src="{{ asset('course/'.$course->image) }}" alt="">

            <h3 class="text-center">{{ $course->name }}</h3>

            <hr>

            {!! $course->content !!}

          </div>
        </div>
      </div>
  </div>

@endsection

@section('script')

<script src="{{ asset('js/bootstrap_file_field.js') }}"></script>
<script src="{{ asset('js/parsley.js') }}"></script>
<script src="{{ asset('js/laravel-parsley.min.js') }}"></script>

@endsection
