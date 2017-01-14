@extends('admin.base')

@section('title','Error 404-Category')

@section('title-content-1','Error404-Category | Admin')

@section('title-content-2','Error404-Category | Admin')

@section('content')


  <div class="row">

      <div class="col-md-6">

          <div class="x_panel">

          <h3>Error 404!</h3>

          <p>Página no Encontrada</p>

          <a href="{{ route('admin-index') }}" class="btn btn-success btn-block">Regresar</a>

          </div>

      </div>

  </div>

@endsection
