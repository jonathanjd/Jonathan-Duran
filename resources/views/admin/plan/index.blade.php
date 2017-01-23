@extends('admin.base-main')

@section('title','Inicio-Plan')

@section('title-content-1','Plan')

@section('main_content')

<div class="app">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

            <a class="btn btn-success btn-block" href="{{ route('admin.plan.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Plan"><i class="fa fa-plus-circle"></i></a>

            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabla Planes <small>Nuestros Planes Web</small></h2>
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
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>ENABLE</th>
                            <th>MOSTRAR</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($plans as $plan)
                        <tr>
                            <td>{{ $plan->id }}</td>

                            <td>{{ $plan->name }}</td>

                            <td>{{ $plan->price }}</td>

                            @if ($plan->enable == 'yes')
                              <td class="text-center"><span class="label label-success">Si</span></td>
                            @else
                              <td class="text-center"><span class="label label-danger">No</span></td>
                            @endif

                            <td><a class="btn btn-primary" href="{{ route('admin.plan.show',$plan) }}" data-toggle="tooltip" data-placement="bottom" title="Ver Plan"><i class="fa fa-eye"></i></a></td>

                            <td><a class="btn btn-warning" href="{{ route('admin.plan.edit', $plan) }}" data-toggle="tooltip" data-placement="bottom" title="Editar Plan"><i class="fa fa-pencil"></i></a></td>
                            <td>
                            {!! Form::open(['route' => ['admin.plan.destroy',$plan],'method' => 'DELETE']) !!}

                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar Plan"><i class="fa fa-eraser"></i></button>
                            {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>

            <a class="btn btn-success btn-block" href="{{ route('admin.plan.create') }}" data-toggle="tooltip" data-placement="bottom" title="Crear Plan"><i class="fa fa-plus-circle"></i></a>

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
