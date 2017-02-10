<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta id="token"name="token" value="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('template-polo/images/favicon.png')); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> | Blog Clon</title>

    <meta name="Author" content="BlogClon" />
    <meta name="Subject" content="creamos sitios web económico" />
    <meta name="description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas" />
    <meta name="Keywords" content="paginas web economicas, diseño web economico, diseño de pagina de internet, diseño de sitios web economicos, diseño web, paginas web, sitios web, paginas web en venezuela, diseño web profesional, diseño de pagina de internet economica, diseñadores web, posicionamiento, diseño de paginas web, desarrollo web, paginas de internet, diseño web profesional, posicionamiento web, diseño web venezuela, diseño web anzoategui, tiendas virtuales, blog, noticias de tecnología, cursos web" />

    <!-- sample fb meta -->
    <meta property="og:title" content="Blog Clon Creamos Sitio Web Únicos y Seguros" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e(route('index')); ?>" />
    <meta property="og:image" content="<?php echo e(asset('imagen/facebook-share.jpg')); ?>" />
    <meta property="og:description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas."/>

    <!-- sample twitter meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@therealkni">
    <meta name="twitter:creator" content="@ClonBlog">
    <meta name="twitter:title" content="Blog Clon Creamos Sitio Web Únicos y Seguros">
    <meta name="twitter:description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas.">
    <meta name="twitter:image" content="<?php echo e(asset('imagen/facebook-share.jpg')); ?>">



    <?php echo $__env->make('polo.part.stylesheet', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('stylesheet'); ?>

</head>

<body class="wide">

    <!-- WRAPPER -->
    <div class="wrapper">


        <!-- HEADER -->
        <?php echo $__env->make('polo.part.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- END: HEADER -->

        <?php echo $__env->yieldContent('content_part'); ?>

        <!-- REVOLUTION SLIDER -->

        <!-- END REVOLUTION SLIDER -->

        <!-- FOOTER -->
        <?php echo $__env->make('polo.part.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- END: FOOTER -->

    </div>
    <!-- END: WRAPPER -->

    <!-- GO TOP BUTTON -->
    <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

    <?php echo $__env->make('polo.part.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(asset('js/contact.js')); ?>"></script>
    <script src="<?php echo e(asset('js/rrssb.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>

</body>

</html>
