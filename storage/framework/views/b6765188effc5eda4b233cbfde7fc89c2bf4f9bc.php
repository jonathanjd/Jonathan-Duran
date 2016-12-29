<?php $__env->startSection('title','Show-Category'); ?>

<?php $__env->startSection('title-content-1','Show-Category | Admin'); ?>

<?php $__env->startSection('title-content-2','Show-Category | Admin'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-md-6">

        <div class="x_panel">

        <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <h3>Datos:</h3>

        <p><strong>ID:</strong> <?php echo e($category->id); ?></p>

        <p><strong>Name:</strong> <?php echo e($category->name); ?></p>

        <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-success btn-block">Regresar</a>
       
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>