@extends('polo.main.base')
@section('title','Diseños')
@section('content_part')

  <!-- PAGE TITLE -->
  @include('polo.part.pagetitle')
  <!-- END: PAGE TITLE -->

  <!-- SECTION -->
  <section>
      <div class="container portfolio">

          <!-- Portfolio Items -->
          <div id="isotope" class="isotope portfolio-items" data-isotope-col="1" data-isotope-item=".portfolio-item">
              @foreach ($designs as $design)
                <div class="portfolio-item design">
                    <div class="portfolio-image effect social-links">
                        <img src="{{ asset('design/'.$design->image) }}" alt="">
                        <div class="image-box-content">
                            <p>
                                <a href="{{ asset('design/'.$design->image) }}" data-lightbox-type="image" title="{{ $design->name }}"><i class="fa fa-expand"></i></a>
                                <a href="{{ $design->url }}" target="_blank" title="Ver Demo"><i class="fa fa-link"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-description">
                        <h4 class="title">{{ $design->name }}</h4>
                        <p><i class="fa fa-tag"></i>Diseño Web / Bootstrap</p>
                    </div>
                    <div class="portfolio-date">
                        <p class="small"><i class="fa fa-calendar-o"></i>{{ $design->created_at->diffForHumans() }}</p>
                    </div>

                    <div class="portfolio-details">
                        <p>{{ $design->content }}</p>
                        <br />
                        <a href="#" class="button color rounded button-3d effect icon-top"><span><i class="fa fa-external-link"></i>Más Detalles</span></a>
                    </div>
                </div>
              @endforeach
          </div>
          <!-- END: Portfolio Items -->

      </div>

      <!-- PAGINATION -->
      <div class="text-center">
        {{ $designs->links() }}
      </div>

      <!-- END: PAGINATION -->

  </section>



@endsection
