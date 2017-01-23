<?php $__env->startSection('title','Inicio'); ?>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('polo.main.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>