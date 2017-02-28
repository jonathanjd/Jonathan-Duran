@extends('admin.base-main')

@section('title','Eliminar-Category')

@section('title-content-1','Eliminar-Category | Admin')

@section('main_content')

<div class="app">
  <div class="row">
    <div class="col-md-6 col-xs-12">

      <a href="{{ route('admin.category.index') }}" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

      <div class="x_panel">
        <div class="x_title">
          <h2>Form Category <small>Eliminar</small></h2>
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
          @can('delete-admin')
          {!! Form::open(['route' => ['admin.category.destroy',$category->id],'method' => 'DELETE','class' => 'form-horizontal form-label-left input_mask']) !!}

            <h3>{{ $category->name }} <small>Deseas Eliminar?</small></h3>

            <div class="form-group">

                <button type="submit" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-save"></i></button>

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
