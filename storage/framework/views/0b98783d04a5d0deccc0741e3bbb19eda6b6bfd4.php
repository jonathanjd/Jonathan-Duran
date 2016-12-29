<?php $__env->startSection('title','Delete-Category'); ?>

<?php $__env->startSection('title-content-1','Delete-Category | Admin'); ?>

<?php $__env->startSection('title-content-2','Delete-Category | Admin'); ?>

<?php $__env->startSection('content'); ?>


<div class="row">

  <div class="col-md-6 col-xs-12">
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
    <br />

    <?php if(count($errors) > 0): ?>
    <div class="alert alert-dismissible alert-danger">
      <ul>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php foreach($errors->all() as $error): ?>
      <li>
       <?php echo e($error); ?>

      </li>
    <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>


    <?php echo Form::open(['route' => ['admin.category.destroy',$category->id],'method' => 'DELETE','class' => 'form-horizontal form-label-left input_mask']); ?>


      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
        <p><strong>Deseas Eliminar Name:</strong><?php echo e($category->name); ?>?</p>
      </div>

      <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12">
          <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-primary">Regresar</a>
          <button type="submit" class="btn btn-success">Eliminar</button>
        </div>
      </div>

    </form>
    <?php echo Form::close(); ?>

  </div>
</div>
  </div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>