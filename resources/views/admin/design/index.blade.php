@extends('admin.base-main')

@section('title','Inicio-Design')

@section('title-content-1','Inicio-Design | Admin')


@section('main_content')


<div class="app">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

            <a class="btn btn-success btn-block" href="{{ route('admin.design.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Diseño"><i class="fa fa-plus-circle"></i></a>
           
            {{ $designs->links() }}

            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabla Diseño <small>Nuestros Diseños Web</small></h2>
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
                    
                @include('admin.message')

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>NAME</th>
                            <th>URL</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($designs as $design)
                        <tr>
                            <td>{{ $design->id }}</td>
                            <td>
                                    <img src="{{ asset('design/'.$design->image) }}" alt="..." class="img-responsive img-thumbnail center-block" height="150" width="150">
                            </td>
                            <td>{{ $design->name }}</td>
                            <td>
                            <a href="{{ $design->url }}" target="_blank">Ver Demo</a>
                            </td>
                            <td><a class="btn btn-warning" href="{{ route('admin.design.edit', $design) }}" data-toggle="tooltip" data-placement="bottom" title="Editar Diseño"><i class="fa fa-pencil"></i></a></td>
                            <td>
                            {!! Form::open(['route' => ['admin.design.destroy',$design],'method' => 'DELETE']) !!}
                            
                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar Diseño"><i class="fa fa-eraser"></i></button>
                            {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>

            {{ $designs->links() }}
            
            <a class="btn btn-success btn-block" href="{{ route('admin.design.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Diseño"><i class="fa fa-plus-circle"></i></a>

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
@endsection
