<?php $__env->startSection('title','Error 404-Category'); ?>

<?php $__env->startSection('title-content-1','Error404-Category | Admin'); ?>

<?php $__env->startSection('title-content-2','Error404-Category | Admin'); ?>

<?php $__env->startSection('content'); ?>


  <div class="row">

      <div class="col-md-6">

          <div class="x_panel">

          <h3>Error 404!</h3>

          <p>Página no Encontrada</p>

          <a href="<?php echo e(route('admin-index')); ?>" class="btn btn-success btn-block">Regresar</a>

          </div>

      </div>

  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>