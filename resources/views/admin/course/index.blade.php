@extends('admin.base-main')

@section('title','Cursos | Inicio')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/bootstrap_file_field.css') }}">
  <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('title-content-1','Cursos')

@section('main_content')

<div id="app">
<div class="row">

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Tabla Cursos <small>Nuestros Cursos De Programación Web Online</small></h2>
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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in course.list">
                        <th scope="row">@{{ item.id }}</th>
                        <td>@{{ item.image }}</td>
                        <td>@{{ item.name }}</td>
                        <td>@{{ item.content }}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="col-md-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Formulario de Cursos <small>Agregar Un Nuevo Curso</small></h2>
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
            <form class="form-horizontal form-label-left input_mask" action="#" @submit.prevent="save_course" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label class="control-label col-md-3">Name:</label>
                <div class="col-md-9">
                  <input type="text" v-model="course.name" name="name" value="" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">Content:</label>
                <div class="col-md-9">
                  <textarea name="content" v-model="course.content" rows="8" cols="80" class="form-control"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">Image:</label>
                <div class="col-md-9">
                  <input type="file" name="image" v-model="course.image" value="" data-field-type="bootstrap-file-filed" data-preview="on" data-file-types="image/jpeg,image/png,image/gif" data-btn-class="btn-default" required>
                </div>
              </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i></button>
                </div>

            </form>
        </div>
    </div>
</div>

</div>
</div>

@endsection
@section('script')
<script src="{{ asset('js/vue/vue-course.js') }}"></script>
<script src="{{ asset('js/bootstrap_file_field.js') }}"></script>
<script src="{{ asset('js/parsley.js') }}"></script>
@endsection
