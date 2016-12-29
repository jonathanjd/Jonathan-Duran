@extends('admin.base')

@section('title','Eliminar-Category')

@section('title-content-1','Eliminar-Category | Admin')

@section('title-content-2','Eliminar-Category | Admin')

@section('content')


<div class="row">

  <div class="col-md-6 col-xs-12">
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
    <br />

    @if(count($errors) > 0)
    <div class="alert alert-dismissible alert-danger">
      <ul>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    @foreach($errors->all() as $error)
      <li>
       {{ $error }}
      </li>
    @endforeach
      </ul>
    </div>
    @endif


    {!! Form::open(['route' => ['admin.category.destroy',$category->id],'method' => 'DELETE','class' => 'form-horizontal form-label-left input_mask']) !!}

      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
        <p><strong>Deseas Eliminar Name:</strong>{{ $category->name }}?</p>
      </div>

      <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12">
          <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Regresar</a>
          <button type="submit" class="btn btn-success">Eliminar</button>
        </div>
      </div>

    </form>
    {!! Form::close() !!}
  </div>
</div>
  </div>

</div>



@endsection
