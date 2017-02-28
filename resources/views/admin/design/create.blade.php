@extends('admin.base-main')

@section('title','Crear-Design')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/bootstrap_file_field.css') }}">
<link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('title-content-1','Crear-Design | Admin')

@section('main_content')

<div class="app">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">


      <a class="btn btn-success btn-block" href="{{ route('admin.design.index') }}" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

      <div class="x_panel">
        <div class="x_title">
          <h2>Form Design <small>Crear</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">#</a>
                  </li>
                  <li><a href="#">#</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          @include('admin.message-error')
          @can('create-admin')
          {!! Form::open(['route' => 'admin.design.store','method' => 'POST','class' => 'form-horizontal form-label-left input_mask','files' => true,'data-parsley-validate' => '']) !!}

            <div class="form-group">
              {!! Form::label('name','Name Design:') !!}
              {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Name Design','required' => '','data-parsley-length' => '[3,50]']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('content','Content Design:') !!}
              {!! Form::textarea('content',null,['class' => 'form-control', 'placeholder' => 'Content Design', 'required' => '','data-parsley-length' => '[10,1000]']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('url','URL Demo:') !!}
              {!! Form::text('url',null,['class' => 'form-control', 'placeholder' => 'URL Demo','required' => '']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('Image','Image Design:') !!}
              {!! Form::file('image',['data-field-type' => 'bootstrap-file-filed','data-preview' => 'on','data-file-types' => 'image/jpeg,image/png,image/gif','data-btn-class' => 'btn-primary','required' => '']) !!}
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar"><i class="fa fa-save"></i></button>

            </div>


          {!! Form::close() !!}
        @endcan
        </div>
      </div>

      <a class="btn btn-success btn-block" href="{{ route('admin.design.index') }}" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

    </div>
  </div>
</div>


@endsection

@section('script')
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script src="{{ asset('js/bootstrap_file_field.js') }}"></script>
<script src="{{ asset('js/parsley.js') }}"></script>
@endsection
