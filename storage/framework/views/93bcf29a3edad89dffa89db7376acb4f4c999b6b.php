<?php $__env->startSection('title', 'Creamos sitios web únicos y seguros'); ?>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front-end.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>