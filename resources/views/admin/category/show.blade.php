@extends('admin.base')

@section('title','Show-Category')

@section('title-content-1','Show-Category | Admin')

@section('title-content-2','Show-Category | Admin')

@section('content')

<div class="row">

    <div class="col-md-6">

        <div class="x_panel">

        @include('admin.message')

        <h3>Datos:</h3>

        <p><strong>ID:</strong> {{ $category->id }}</p>

        <p><strong>Name:</strong> {{ $category->name }}</p>

        <a href="{{ route('admin.category.index') }}" class="btn btn-success btn-block">Regresar</a>
       
        </div>

    </div>

</div>

@endsection
