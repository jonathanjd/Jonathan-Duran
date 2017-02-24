<section>
	<div class="heading heading-center">
			<h2>Planes más vendidos</h2>
			<p>Planes para Sitios Web.</p>
		</div>
	<div class="container">

		<div class="row">
            <div class="pricing-table">
					@foreach ($plans as $plan)

						@if ($plan->name == 'PLAN BÁSICO')

						<div class="col-md-4 col-sm-12 col-xs-12">
		                    <div class="plan featured">
		                        <div class="plan-header">
		                            <h4>{{ $plan->name }}</h4><p class="text-muted">Plan short description</p>
		                            <p class="plan-price"><sup>BsF</sup>{{ $plan->price }}<span>/año</span>
		                            </p>
		                            <a href="{{ route('servicio',$plan->slug) }}" class="button red button-3d rounded effect icon-bottom"><span><i class="fa fa-plus-circle"></i>Más Información</span></a>
		                        </div>
		                        <div class="plan-list">
		                            <ul>
										@foreach ($plan->features->take(6) as $feature)

										<li><i class="fa fa-dot-circle-o"></i>{{ $feature->description }}</li>

										@endforeach
		                            </ul>
		                        </div>
		                    </div>
		                </div>

						@else

						<div class="col-md-4 col-sm-12 col-xs-12">
		                    <div class="plan">
		                        <div class="plan-header">
		                            <h4>{{ $plan->name }}</h4><p class="text-muted">Plan short description</p>
		                            <p class="plan-price"><sup>BsF</sup>{{ $plan->price }}<span>/año</span>
		                            </p>
		                            <a href="{{ route('servicio',$plan->slug) }}" class="button black-light button-3d rounded effect icon-bottom"><span><i class="fa fa-plus-circle"></i>Más Información</span></a>
		                        </div>
		                        <div class="plan-list">

		                            <ul>
										@foreach ($plan->features->take(6) as $feature)

										<li><i class="fa fa-dot-circle-o"></i>{{ $feature->description }}</li>

										@endforeach
		                            </ul>
		                        </div>
		                    </div>
		                </div>

						@endif

					@endforeach

            </div>
        </div>

	</div>
</section>
