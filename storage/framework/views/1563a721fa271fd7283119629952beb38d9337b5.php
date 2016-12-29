<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Blog Clon | <?php echo $__env->yieldContent('title'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brindamos Micro-Servicio de diseño de paginas web, posicionamiento web, administrador de contenido. Creamos sitios web únicos y seguros.">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="Copyright 2016 by Blog Clon" />
    <meta name="author" content="Jonathan Duran">
    <meta name="disribution" content="global" />
    <meta id="token"name="token" value="<?php echo e(csrf_token()); ?>">
    <!-- Bootstrap Css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="<?php echo e(asset('template-web/plugins/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('template-web/plugins/owl-carousel/owl.theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('template-web/plugins/owl-carousel/owl.transitions.css')); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('template-web/plugins/Icons/et-line-font/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('template-web/plugins/animate.css/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('template-web/css/main.css')); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo e(asset('template-web/img/logo/favicon.png')); ?>" />
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <?php echo $__env->make('web.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Welcome
	============================================= -->
    <?php echo $__env->make('web.services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Portfolio
	============================================= -->
    <?php echo $__env->make('web.portfolio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Work Process
	============================================= -->
    <?php echo $__env->make('web.work-process', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Some Fune Facts
	============================================= -->
    <?php echo $__env->make('web.some-fune-facts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <!-- Some Fune Facts
	============================================= -->
    <?php echo $__env->make('web.some-fune-facts-team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Testimonials
	============================================= -->
    <?php echo $__env->make('web.testimonials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Contact Us
	============================================= -->
    <?php echo $__env->make('web.contactus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Footer
	============================================= -->
    <?php echo $__env->make('web.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('template-web/js/custom.js')); ?>"></script>
    <!-- JS PLUGINS -->
    <script src="<?php echo e(asset('template-web/plugins/owl-carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template-web/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template-web/plugins/waypoints/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template-web/plugins/countTo/jquery.countTo.js')); ?>"></script>
    <script src="<?php echo e(asset('template-web/plugins/inview/jquery.inview.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template-web/plugins/Lightbox/dist/js/lightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template-web/plugins/WOW/dist/wow.min.js')); ?>"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(asset('js/index.js')); ?>"></script>
    <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</body>

</html>
