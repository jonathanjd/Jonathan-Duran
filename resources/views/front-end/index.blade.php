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
<section id="title-start" class="section">
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
		<h3>Todo lo necesario Para Empezar una Página Web</h1>
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
<section id="diseños-web" class="section">
	<div class="container-fluid">
		<div class="header-diseños-web text-center">
			<h3>Nuestros Diseños Web</h1>
			<p>Nos enfocamos en diseños de páginas web limpias, bien estructuradas y de fácil navegación</p>
		</div><!-- .header-diseños-web -->
		<div id="carousel-example-generic" class="body-diseños-web carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol><!-- .carousel-indicators -->
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			  <div class="item active">
			    <img class="img-responsive center-block" src="{{ asset('img/carrusel1.jpg') }}" alt="...">
			    <div class="carousel-caption text-black">
			        <h3>Diseño 1</h3>
							<p>...</p>
			    </div><!-- .carousel-caption -->
			  </div><!-- .item active -->
			  <div class="item">
			    <img class="img-responsive center-block"src="{{ asset('img/carrusel2.jpg') }}" alt="...">
			    <div class="carousel-caption text-black">
			        <h3>Diseño 2</h3>
							<p>...</p>
			    </div><!-- .carousel-caption -->
			  </div><!-- .item -->
				<div class="item">
			  	<img class="img-responsive center-block" src="{{ asset('img/carrusel3.jpg') }}" alt="...">
			      <div class="carousel-caption text-black">
			        <h3>Diseño 3</h3>
							<p>...</p>
			      </div><!-- .carousel-caption -->
			  </div><!-- .item -->
		  </div><!-- .carousel-inner -->

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a><!-- .left carousel-control -->
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a><!-- .right carousel-control -->
		</div><!-- .carousel-example-generic #-->
	</div><!-- .container #carousel slide -->
</section><!-- #diseños-web .section -->
<!-- END DISEÑOS WEB -->

<!-- CALL ACTION -->
<section id="call-action" class="section background-orange text-white">
	<div class="container text-center">
		<h2>LLEVA TU NEGOCIO AL SIGUIENTE NIVEL</h1>
		<a href="#" class="btn btn-primary btn-lg">Comenzar</a>
	</div><!-- .container text-center -->
</section><!-- .call-action -->
<!-- END CALL ACTION -->

<!-- FORMULARIO DE CONTACTO -->
<section id="formulario-contacto" class="section">
	<div class="container">
		<div class="row">
			<div class="formulario-header text-left text-center">
				<h3>Contáctanos!</h3>
				<p>¿Tienes alguna idea de negocio?, contáctanos y con gusto te asesoramos</p>
			</div><!-- .formulario-header -->
			<div class="formulario-body">
				<form>
					<div class="form-group col-md-6">
					  <input type="text" class="form-control" id="" placeholder="Ingrese su Nombre">
					</div><!-- .form-group col-md-6 -->
					<div class="form-group col-md-6">
					  <input type="email" class="form-control" id="" placeholder="Ingrese su Correo">
					</div><!-- .form-group col-md-6 -->
					<div class="form-group col-md-12">
					  <input type="text" class="form-control" id="" placeholder="Asunto">
					</div><!-- .form-group col-md-6 -->
					<div class="form-group col-md-12">
					  <textarea class="form-control" rows="5" placeholder="Mensaje"></textarea>
					</div><!-- .form-group col-md-6 -->
					<div class="form-group col-md-12">
						<button class="btn btn-primary btn-lg btn-block" type="submit" name="button">Enviar</button>
					</div>
				</form><!-- .formulario-body -->
			</div><!-- .formulario-body -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #formulario-contacto .section -->
<!-- END FORMULARIO DE CONTACTO -->

<!-- FOOTER -->
<footer id="footer" class="background-dark text-white">
        <div class="container text-center">
            <p>
                 <i class="fa fa-copyright"></i>2016 BlogClon Creamos Páginas Web Atractivos | Made with <i class="fa fa-heart"></i> by <a href="#">Jonathan Duran</a>
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
