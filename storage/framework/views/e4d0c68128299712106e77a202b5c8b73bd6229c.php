<?php $__env->startSection('title','Cursos | Inicio'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap_file_field.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/parsley.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title-content-1','Cursos'); ?>

<?php $__env->startSection('main_content'); ?>

<div id="app">
<div class="row">

<div class="col-md-6 col-sm-6 col-xs-12">

  <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div>
      <a href="<?php echo e(route('admin.course.create')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Curso"><i class="fa fa-plus-circle"></i></a>
  </div>

    <div class="x_panel">
        <div class="x_title">
            <h2>Tabla Cursos <small>Nuestros Cursos De Programación Web Online</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Mostrar</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                  <?php foreach($courses as $course): ?>
                    <tr>
                        <th scope="row"><?php echo e($course->id); ?></th>
                        <td> <img src="<?php echo e(asset('course/'.$course->image)); ?>" alt="" class="img-responsive img-thumbnail"></td>
                        <td><?php echo e($course->name); ?></td>
                        <td><?php echo e($course->content); ?></td>
                        <td><a href="<?php echo e(route('admin.course.show',$course)); ?>" data-toggle="tooltip" data-placement="bottom" title="Ver" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                        <td><a href="<?php echo e(route('admin.course.edit',$course)); ?>" data-toggle="tooltip" data-placement="bottom" title="Editar" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="<?php echo e(route('admin.course.delete',$course)); ?>" data-toggle="tooltip" data-placement="bottom" title="Eliminar" class="btn btn-danger"><i class="fa fa-eraser"></i></a></td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>

    <div>
      <?php echo e($courses->links()); ?>

    </div>

    <div>
        <a href="<?php echo e(route('admin.course.create')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Curso"><i class="fa fa-plus-circle"></i></a>
    </div>

</div>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/bootstrap_file_field.js')); ?>"></script>
<script src="<?php echo e(asset('js/parsley.js')); ?>"></script>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>