<?php $__env->startSection('title', 'Creamos Páginas Web Únicos y Seguros'); ?>
<?php $__env->startSection('content'); ?>

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
				<a class="navbar-brand" href="<?php echo e(route('index')); ?>">
					<img src="<?php echo e(asset('img/logo-blogclon.png')); ?>" alt="Blog Clon Creamos Sitios Web">
				</a><!-- .navbar-brand -->
			</div><!-- .navbar-header -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"></i>Home</a></li>
					<li><a href="#"></i>Planes</a></li>
					<li><a href="#"></i>Diseños</a></li>
					<li><a href="#"></i>Blog</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal-login">Acceder</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal-signup">Registrar</a></li>
				</ul>
			</div><!-- .collapse navbar-collapse -->
		</div><!-- .container -->
	</nav><!-- .navbar navbar-default navbar-fixed-top -->
</header>
<!-- END HEADER -->

<!-- TITLE & START -->
<section id="title-start" class="section">
	<div class="jumbotron" style="background: url('<?php echo e(asset('img/img-main.jpg')); ?>') 60% 40% no-repeat fixed; background-size: cover">
		<div class="container-fluid text-center text-white">
			<h1>CREAMOS PÁGINA WEB ATRACTIVOS</h1>
		  <h2>ÚNICOS Y SEGUROS</h2>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Comenzar</a></p>
		</div><!-- .container-fluid -->
	</div><!-- .jumbotron -->
</section><!-- #title-video -->
<!-- END TITLE & START -->



<!-- FOOTER -->
<footer id="footer" class="background-dark text-white">
	<div class="container text-center">
		<p>
			<i class="fa fa-copyright"></i>2016 BlogClon Creamos Páginas Web Atractivos | Made with <i class="fa fa-heart"></i> by <a href="#">Jonathan Duran</a>
		</p>
	</div><!-- container-fluid .text-center -->
</footer><!-- footer -->
<!-- END FOOTER -->

<!-- HIDDEN LOGIN MODAL -->
<div class="modal fade" id="modal-login">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<a href="#" class="btn btn-primary btn-block" role="button">
					<i class="fa fa-facebook-square"> Iniciar Sesión</i>
				</a>
			</div><!-- modal-header -->
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="input-email">Email</label>
						<input type="email" class="form-control" id="input-email" placeholder="Escribe tu email...">
					</div><!-- .form-group -->
					<div class="form-group">
						<label for="input-password">Contraseña</label>
						<input type="password" class="form-control" id="input-password" placeholder="Escribe tu contraseña">
					</div><!-- .form-group -->
					<button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
				</form><!-- End form -->
			</div><!-- .modal-body -->
			<div class="modal-footer">
				<p>
					<a href="#">
            Has olvidado la contraseña?
          </a>
				</p>
			</div><!-- .modal-footer -->
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog modal-sm -->
</div><!-- .modal fade #modal-login -->
<!-- END HIDDEN LOGIN MODAL -->

<!-- HIDDEN SIGNUP MODAL -->
<div class="modal fade" id="modal-signup">
		<div class="modal-dialog modal-sm">
				<div class="modal-content">
						<div class="modal-header">
								<a href="" class="btn btn-primary btn-block" role="button">
										<i class="fa fa-facebook-square"> Regístrate con Facebook</i>
								</a>
						</div><!-- modal-header -->
						<div class="modal-body">
								<form action="">
										<div class="form-group">
												<label for="inputName">Nombre de Usuario</label>
												<input type="text" name="" value="" class="form-control" id="inputName" placeholder="Escribe un nombre de Usuario">
										</div><!-- form-group -->
										<div class="form-group">
												<label for="inputEmailSignup">Email</label>
												<input type="email" name="" value="" class="form-control" id="inputEmailSignup" placeholder="Escribe tu email">
										</div>
										<div class="form-group">
												<label for="inputPasswordSignup">Contraseña</label>
												<input type="password" name="" value="" class="form-control" id="inputPasswordSignup" placeholder="Elige una Contraseña">
										</div>
										<div class="form-group">
												<label for="inputPasswordSignupR">Confirma tu Contraseña</label>
												<input type="password" name="" value="" class="form-control" id="inputPasswordSignupR" placeholder="Escribe de nuevo tu Contraseña">
										</div>
										<button type="submit" class="btn btn-success btn-block">Regístrate</button>
								</form>
						</div><!-- modal-body -->
						<div class="modal-footer">
								<p class="text-center">Al registrarme, <a href="#">Acepto los Términos de uso</a> y <a href="#"> La Política de Privacidad</a></p>
						</div><!-- modal-footer -->
				</div><!-- modal-content -->
		</div><!-- .modal-dialogo modal-sm -->
</div><!-- .modal fade #modal-signup -->
<!-- END HIDDEN SIGNUP MODAL -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<!-- COUNTERUP -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="<?php echo e(asset('js/jquery.counterup.min.js')); ?>"></script>
	<script type="text/javascript">
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	</script>
	<!-- END COUNTERUP -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>