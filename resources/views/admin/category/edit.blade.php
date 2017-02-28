@extends('admin.base-main')

@section('title','Editar-Category')

@section('title-content-1','Editar-Category | Admin')

@section('main_content')

<div class="app">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">

      <a href="{{ route('admin.category.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

      <div class="x_panel">
        <div class="x_title">
          <h2>Form Category <small>Editar</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Opción 1</a>
                  </li>
                  <li><a href="#">Opción 2</a>
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
          @can('edit-admin')
          {!! Form::open(['route' => ['admin.category.update',$category->id],'method' => 'PUT','class' => 'form-horizontal form-label-left input_mask']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
              {!! Form::text('name',$category->name,['class' => 'form-control has-feedback-left','placeholder' => 'Name Category','required']); !!}
              <span class="fa fa-bookmark form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-save"></i></button>

            </div>

          {!! Form::close() !!}
        @endcan
        </div>
      </div>

      <a href="{{ route('admin.category.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

    </div>
  </div>
</div>

@endsection
