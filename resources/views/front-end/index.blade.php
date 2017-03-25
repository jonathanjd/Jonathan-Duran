@extends('front-end.base')
@section('title', 'Creamos sitios web únicos y seguros')
@section('content')

<!-- HEADER -->
<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button><!-- .navbar-toggle collapsed -->
				<a class="navbar-brand" href="{{ route('index') }}">
					<img src="{{ asset('img/logo-blogclon.png') }}" alt="Blog Clon Creamos Sitios Web">
				</a><!-- .navbar-brand -->
			</div><!-- .navbar-header -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="">Home</a></li>
					<li><a href="">Servicios</a></li>
					<li><a href="">Diseños</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Acceder</a></li>
					<li><a href="">Registrar</a></li>
				</ul>
			</div><!-- .collapse navbar-collapse -->
		</div><!-- .container -->
	</nav><!-- .navbar navbar-default navbar-fixed-top -->
</header>
<!-- END HEADER -->

<!-- TITLE & START -->
<section id="title-start">
	<div class="jumbotron" style="background: url('{{ asset('img/img-main.jpg') }}') 60% 40% no-repeat fixed; background-size: cover">
		<div class="container-fluid text-center text-white">
			<h1>CREAMOS PÁGINA WEB ATRACTIVOS</h1>
		  <h2>ÚNICOS Y SEGUROS</h2>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Comenzar</a></p>
		</div><!-- .container-fluid -->
	</div><!-- .jumbotron -->
</section><!-- #title-video -->
<!-- END TITLE & START -->

<!-- PLANES -->
<section id="planes" class="section">
	<div class="heading heading-center">
		<h1>Todo lo necesario Para Empezar una Página Web</h1>
		<p>Nuestros Planes</p>
	</div><!-- .heading heading-center -->
	<div class="container">
		<div class="row">
			<div class="pricing-plans">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="plan">
						<div class="plan-header">
							<h3>PLAN UNO</h3>
							<p class="plan-price">
								<sup>Bsf</sup>
								150.000
								<span>*año</span>
							</p><!-- .plan-price-->
							<a href="#" class="btn btn-success">
								<span>
									Más Información
								</span>
							</a><!-- .btn btn-success -->
						</div><!-- .plan-header -->
						<div class="plan-list">
							<ul>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
							</ul>
						</div><!-- .plan-list -->
					</div><!-- .plan-->
				</div><!-- .col-md-4 col-sm-12 col-xs-12 -->
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="plan">
						<div class="plan-header">
							<h3>PLAN UNO</h3>
							<p class="plan-price">
								<sup>Bsf</sup>
								150.000
								<span>*año</span>
							</p><!-- .plan-price-->
							<a href="#" class="btn btn-success">
								<span>
									Más Información
								</span>
							</a><!-- .btn btn-success -->
						</div><!-- .plan-header -->
						<div class="plan-list">
							<ul>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
							</ul>
						</div><!-- .plan-list -->
					</div><!-- .plan-->
				</div><!-- .col-md-4 col-sm-12 col-xs-12 -->
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="plan">
						<div class="plan-header">
							<h3>PLAN UNO</h3>
							<p class="plan-price">
								<sup>Bsf</sup>
								150.000
								<span>*año</span>
							</p><!-- .plan-price-->
							<a href="#" class="btn btn-success">
								<span>
									Más Información
								</span>
							</a><!-- .btn btn-success -->
						</div><!-- .plan-header -->
						<div class="plan-list">
							<ul>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
								<li><i class="fa fa-dot-circle-o"></i>AAA BBB CCC</li>
							</ul>
						</div><!-- .plan-list -->
					</div><!-- .plan-->
				</div><!-- .col-md-4 col-sm-12 col-xs-12 -->
			</div><!-- .pricing-plan -->
		</div><!-- row -->
	</div><!-- .container -->
</section><!-- #planes .section -->
<!-- END PLANES -->

<!-- CODIGO EXTRA -->
<section id="codigo-extra" class="section background-grey text-black">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="text-center">
					<div class="icon">
						<i class="fa fa-3x fa-code"></i>
					</div><!--.icon -->
					<div class="text-counter counter">
						<span>19525</span>
					</div><!-- .text-counter counter -->
					<br>
					<p>
						LINEAS DE CÓDIGOS
					</p>
				</div><!-- text-center -->
			</div><!-- .col-md-3 -->
			<div class="col-md-3">
				<div class="text-center">
					<div class="icon">
						<i class="fa fa-3x fa-coffee"></i>
					</div><!--.icon -->
					<div class="text-counter counter">
						<span>65</span>
					</div><!-- .text-counter counter -->
					<br>
					<p>
						TAZAS DE CAFÉ
					</p>
				</div><!-- text-center -->
			</div><!-- .col-md-3 -->
			<div class="col-md-3">
				<div class="text-center">
					<div class="icon">
						<i class="fa fa-3x fa-rocket"></i>
					</div><!--.icon -->
					<div class="text-counter counter">
						<span>12</span>
					</div><!-- .text-counter counter -->
					<br>
					<p>
						PROYECTOS
					</p>
				</div><!-- text-center -->
			</div><!-- .col-md-3 -->
			<div class="col-md-3">
				<div class="text-center">
					<div class="icon">
						<i class="fa fa-3x fa-smile-o"></i>
					</div><!--.icon -->
					<div class="text-counter counter">
						<span>19</span>
					</div><!-- .text-counter counter -->
					<br>
					<p>
						CLIENTES FELICES
					</p>
				</div><!-- text-center -->
			</div><!-- .col-md-3 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #codigo-extra .background-grey text-black -->
<!-- END CODIGO EXTRA -->

<!-- DISEÑOS WEB -->
<!-- END DISEÑOS WEB -->

<!-- TE GUSTA -->
<!-- END TE GUSTA -->

<!-- NUESTRO BLOG -->
<!-- END NUESTRO BLOG -->

<!-- FOOTER -->
<footer id="footer" class="background-dark text-white">
        <div class="container-fluid text-center">
            <p>
                 <i class="fa fa-copyright"></i>2016 BlogClon - Creamos Páginas Web Atractivos | Made with <i class="fa fa-heart"></i> by <a href="#">Jonathan Duran</a>
            </p>
        </div><!-- container-fluid .text-center -->
    </footer><!-- footer -->
<!-- END FOOTER -->
@stop
@section('script')
	<!-- COUNTERUP -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
	<script type="text/javascript">
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	</script>
	<!-- END COUNTERUP -->
@endsection
