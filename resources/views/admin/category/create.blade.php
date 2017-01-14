@extends('admin.base')

@section('title','Create-Category')

@section('title-content-1','Create-Category | Admin')

@section('title-content-2','Create-Category | Admin')

@section('content')


<div class="row">

  <div class="col-md-6 col-xs-12">
    <div class="x_panel">
  <div class="x_title">
    <h2>Form Category <small>Crear</small></h2>
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


    {!! Form::open(['route' => 'admin.category.store','method' => 'POST','class' => 'form-horizontal form-label-left input_mask']) !!}

      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
        {!! Form::text('name',null,['class' => 'form-control has-feedback-left','placeholder' => 'Name Category','required']); !!}
        <span class="fa fa-bookmark form-control-feedback left" aria-hidden="true"></span>
      </div>

      <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12">
          <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Regresar</a>
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
      </div>

    </form>
    {!! Form::close() !!}
  </div>
</div>
  </div>

</div>



@endsection
