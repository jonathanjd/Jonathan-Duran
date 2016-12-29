<?php $__env->startSection('title','Error 404-Category'); ?>

<?php $__env->startSection('title-content-1','Error404-Category | Admin'); ?>

<?php $__env->startSection('title-content-2','Error404-Category | Admin'); ?>

<?php $__env->startSection('content'); ?>


<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Tabla <small>Categories</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">#</a>
                        </li>
                        <li><a href="#">#</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="x_content">
            <h1>Página no Encontrada</h1>
            <h3>Error 404!</h3>
        <a class="btn btn-success" href="<?php echo e(route('admin.index')); ?>">Regresar</a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>