<?php $__env->startSection('title','Inicio'); ?>
<?php $__env->startSection('meta'); ?>
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
  <meta name="twitter:site" content="@ClonBlog">
  <meta name="twitter:creator" content="@ClonBlog">
  <meta name="twitter:title" content="Blog Clon Creamos Sitio Web Únicos y Seguros">
  <meta name="twitter:description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas.">
  <meta name="twitter:image" content="<?php echo e(asset('imagen/facebook-share.jpg')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_part'); ?>

  <!-- SLIDER -->
  <?php echo $__env->make('polo.part.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- END: SLIDER -->

  <!-- SERVICES -->
  <?php echo $__env->make('polo.part.service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- END: SERVICES -->

  <!-- COUNTERS -->
  <?php echo $__env->make('polo.part.counter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- END: COUNTERS -->

  <!-- PORTFOLIO -->
  <?php echo $__env->make('polo.part.portfolio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- END: Portfolio Items -->

  <!-- CALL TO ACTION -->
  <?php echo $__env->make('polo.part.calltoaction', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- CALL TO ACTION -->

  <!-- BLOG -->
  <?php echo $__env->make('polo.part.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- END: BLOG -->

  <!-- Social -->
  <?php echo $__env->make('polo.part.socialrrssb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- END: SOCIAL -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('polo.main.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>