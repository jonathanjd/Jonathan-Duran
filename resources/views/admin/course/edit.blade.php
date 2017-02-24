@extends('admin.base-main')

@section('title','Cursos | Inicio')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/bootstrap_file_field.css') }}">
  <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
  <link rel="stylesheet" href="{{ asset('trumbowyg/dist/ui/trumbowyg.min.css') }}">
@endsection

@section('title-content-1','Editar Cursos')

@section('main_content')

<div id="app">
<div class="row">

<div class="col-md-6 col-xs-12">

    <div>
      <a href="{{ route('admin.course.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
    </div>

    @include('admin.error')

    <div class="x_panel">
        <div class="x_title">
            <h2>Formulario de Cursos <small>Editar Un Curso</small></h2>
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
            <br />

             {!! Form::open(['route' => ['admin.course.update',$course->id],'method' => 'PUT','class' => 'form-horizontal form-label-left input_mask','files' => true,'data-parsley-validate' => '']) !!}

             <div class="form-group">
               {!! Form::label('image','Image:',['class' => 'control-label col-md-3']) !!}
               <div class="col-md-9">
                 <img src="{{ asset('course/'.$course->image) }}" class="img-responsive img-thumbnail" alt="">
               </div>
             </div>


              <div class="form-group">
                {!! Form::label('name','Name:',['class' => 'control-label col-md-3']) !!}
                <div class="col-md-9">
                  {!! Form::text('name', $course->name,['class' => 'form-control','data-parsley-required' => '']) !!}
                </div>
              </div>

              <div class="form-group">
                {!! Form::label('content','Content:',['class' => 'control-label col-md-3']) !!}
                <div class="col-md-9">
                  {!! Form::textarea('content', $course->content, ['class' => 'form-control trumbowyg-text','data-parsley-required' => '']) !!}
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">Image:</label>
                <div class="col-md-9">
                  <input type="file" name="image" value="" data-field-type="bootstrap-file-filed" data-preview="on" data-file-types="image/jpeg,image/png,image" data-btn-class="btn-primary">
                </div>
              </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-save"></i></button>
                </div>

            {{ Form::close() }}
        </div>
    </div>

    <div>
      <a href="{{ route('admin.course.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
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
<script src="{{ asset('trumbowyg/dist/trumbowyg.min.js') }}"></script>

<script type="text/javascript">
  $('.trumbowyg-text').trumbowyg();
</script>
@endsection
