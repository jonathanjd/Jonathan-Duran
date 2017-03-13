<?php $__env->startSection('title','Creamos Páginas Web Únicos'); ?>
<?php $__env->startSection('meta'); ?>
  <meta name="description" content="Creamos páginas web de alta calidad, diseño web, aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas" />
  <meta name="Keywords" content="crear pagina web, como crear una pagina web, diseños web, paginas web, servicios web" />

  <!-- sample fb meta -->
  <meta property="og:title" content="Blog Clon Creamos Sitio Web Únicos y Seguros" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo e(route('index')); ?>" />
  <meta property="og:image" content="<?php echo e(asset('imagen/facebook-share.jpg')); ?>" />
  <meta property="og:description" content="Creamos sitios web de alta calidad, Diseño web, Aplicaciones Web, Blog Clon ofrece páginas web accesibles, posicionamiento en buscadores, servicios profesionales en sitios web, paginas web dinamicas. Diseño de paginas web económicas."/>
  <meta property="fb:app_id" content="294735130942812" />

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