@extends('polo.main.base')
@section('title','Servicio')
@section('content_part')

<section id="page-title" style="background: url('/template-polo/images/parallax/18.jpg')" data-stellar-background-ratio="0.6" class="page-title-center page-title-animate page-title-parallax text-light">
  <div class="background-overlay"></div>
  <div class="container">
    <div class="page-title col-md-8 text-shadow-dark">
      <h1 class="text-uppercase text-medium">{{ $plan->name }}</h1>
      <span>A continuación conoce las características que posee {{ $plan->name }}...</span>
    </div>
    <div class="breadcrumb col-md-4">
      <ul>
        <li><a href="{{ route('index') }}"><i class="fa fa-home"></i></a>
        </li>
        <li><a href="#">Servicio</a>
        </li>
        <li><a href="#">{{ $plan->service->name }}</a>
        </li>
        <li class="active"><a href="#">{{ $plan->name }}</a>
        </li>
      </ul>
    </div>
  </div>
</section>

<section>
  <div class="container">

    <div class="row m-b-60">
      <div class="col-md-6">
        <h3>{{ $plan->name }}</h3>
        <ul class="list-group">

          @foreach($plan->features as $feature)
          <li class="list-group-item"><i class="fa fa-check"></i> {{ $feature->description }}</li>
          @endforeach

        </ul>

        <div class="text-center">
          <a class="button color button-3d rounded effect fill-vertical" href="{{ route('servicio_contratar',$plan) }}"><span>CONTRATAR</span></a>
        </div>
        
      </div>
      <div class="col-md-6">
        <h3>Accesos Rápidos:</h3>
        <div class="list-group">
          @foreach($plans as $plan)

          <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-star"></span> {{ $plan->name }}
          </a>

          @endforeach

        </div>
      </div>

      <div class="seperator"><i class="fa fa-cog fa-spin"></i>

      </div>
      @include('polo.part.contact')
    </div>


</section>



@endsection
