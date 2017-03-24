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
		<div class="container-fluid text-center color-white">
			<h1>CREAMOS PÁGINA WEB ATRACTIVOS</h1>
		  <h2>ÚNICOS Y SEGUROS</h2>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Comenzar</a></p>
		</div><!-- .container-fluid -->
	</div><!-- .jumbotron -->
</section><!-- #title-video -->
<!-- END TITLE & START -->

<!-- PLANES -->
<!-- END PLANES -->

<!-- CODIGO EXTRA -->
<!-- END CODIGO EXTRA -->

<!-- DISEÑOS WEB -->
<!-- END DISEÑOS WEB -->

<!-- TE GUSTA -->
<!-- END TE GUSTA -->

<!-- NUESTRO BLOG -->
<!-- END NUESTRO BLOG -->

<!-- FOOTER -->
<!-- END FOOTER -->
@stop
