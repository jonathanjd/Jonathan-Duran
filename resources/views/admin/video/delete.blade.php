@extends('admin.base-main')

@section('title','Videos | Mostrar')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/bootstrap_file_field.css') }}">
  <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('title-content-1','Eliminar Video')

@section('main_content')

<div id="app">
<div class="row">

<div class="col-md-6 col-sm-6 col-xs-12">

  <div>
      <a href="{{ route('admin.video.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
  </div>



    <div class="x_panel">
        <div class="x_title">
            <h2>Tabla Video <small>Deseas Eliminar este Video?</small></h2>
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
          @include('admin.error')

          <h3>{{ $video->name }}<small>{{ $video->course->name }}</small></h3>

          <p>{{ $video->content }}</p>

          <img class="img-responsive img-thumbnail center-block" src="{{ asset('video/'.$video->image) }}" alt="">
          <br>

          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ substr($video->url, 32) }}" frameborder="0" allowfullscreen></iframe>
          </div>

          <br>
          @can('delete-admin')
          {!! Form::open(['route'=> ['admin.video.destroy',$video->id],'method' => 'DELETE']) !!}
          <button type="submit" name="dalete" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-eraser"></i></button>
          {!! Form::close() !!}
        @endcan
        </div>
    </div>

    <div>
        <a href="{{ route('admin.video.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
    </div>

</div>

</div>
</div>

@endsection
@section('script')
<script src="{{ asset('js/bootstrap_file_field.js') }}"></script>
<script src="{{ asset('js/parsley.js') }}"></script>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@endsection
