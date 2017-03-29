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
					<li><a href="{{ route('index') }}"></i>Home</a></li>
					<li><a href="#"></i>Planes</a></li>
					<li><a href="{{ route('designs') }}"></i>Diseños</a></li>
					<li><a href="#"></i>Blog</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal-login">Acceder</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal-signup">Registrar</a></li>
				</ul>
			</div><!-- .collapse navbar-collapse -->
		</div><!-- .container -->
	</nav><!-- .navbar navbar-default navbar-fixed-top -->
</header>
