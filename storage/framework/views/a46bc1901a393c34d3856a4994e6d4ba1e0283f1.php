<?php $__env->startSection('title','Eliminar-Category'); ?>

<?php $__env->startSection('title-content-1','Eliminar-Category | Admin'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="app">
  <div class="row">
    <div class="col-md-6 col-xs-12">

      <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

      <div class="x_panel">
        <div class="x_title">
          <h2>Form Category <small>Eliminar</small></h2>
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
        <div class="x_content">
          <?php if (app('Illuminate\Contracts\Auth\Access\Gate')->check('delete-admin')): ?>
          <?php echo Form::open(['route' => ['admin.category.destroy',$category->id],'method' => 'DELETE','class' => 'form-horizontal form-label-left input_mask']); ?>


            <h3><?php echo e($category->name); ?> <small>Deseas Eliminar?</small></h3>

            <div class="form-group">

                <button type="submit" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-save"></i></button>

            </div>


          <?php echo Form::close(); ?>

        <?php endif; ?>
        </div>
      </div>

      <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>