<?php $__env->startSection('title','Cursos'); ?>

<?php $__env->startSection('stylesheet'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cursos.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cursos
            <small>Aprenderás nuevas habilidades y conocimientos básicos sobre Programación Web.</small>
        </h1>
    </div>
</div>
        <!-- /.row -->

<div class="row">
  <div class="col-md-8 col-md-offset-2">

    <div class="bloque">
      <div class="">
        <img class="img-responsive img-rounded center-block" src="<?php echo e(asset('imagen/HTML5_Logo_512.png')); ?>" alt="">
      </div>
      <h3 class="text-center" id="efecto">HTML 5</h3>
      <p class="text-justify">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit scelerisque ante a posuere. Donec consequat nisl ac nisl bibendum vehicula. Proin fermentum lacus ac nisl tincidunt, sit amet tristique orci sagittis. Maecenas rutrum commodo enim. Suspendisse vitae quam auctor felis euismod congue eget ut lectus. Etiam at accumsan justo. Pellentesque a risus auctor, dictum nisl nec, aliquam odio. Maecenas eget congue dolor. Suspendisse tempus consequat odio in interdum. Praesent molestie fringilla leo sit amet consequat. Sed luctus enim in ipsum viverra, et bibendum ipsum interdum. Phasellus tincidunt venenatis quam eget semper. Ut condimentum tortor nec semper cursus. Praesent rutrum diam eu venenatis facilisis.
      </p>
      <button type="button" name="button" class=" btn btn-success">Ver Curso</button>
    </div>

  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.page.cursos.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>