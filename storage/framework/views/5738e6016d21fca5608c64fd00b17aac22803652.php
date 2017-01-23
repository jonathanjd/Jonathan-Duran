

<?php $__env->startSection('title','Inicio-Category'); ?>

<?php $__env->startSection('title-content-1','Inicio-Category | Admin'); ?>


<?php $__env->startSection('main_content'); ?>

<div class="app">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

            <a href="<?php echo e(route('admin.category.create')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Category"><i class="fa fa-plus-circle"></i></a>
            
            <?php echo e($categories->links()); ?>


            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabla <small>Categoría</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Opción 1</a>
                                    </li>
                                    <li><a href="#">Opción 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>Mostrar</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($categories as $category): ?>
                            <tr>
                                <th scope="row"><?php echo e($category->id); ?></th>
                                <td><?php echo e($category->name); ?></td>
                                <td><a class="btn btn-primary" href="<?php echo e(route('admin.category.show',$category)); ?>" data-toggle="tooltip" data-placement="bottom" title="Ver Categoría"><i class="fa fa-eye"></i></a></td>
                                <td><a class="btn btn-warning" href="<?php echo e(route('admin.category.edit',$category)); ?>" data-toggle="tooltip" data-placement="bottom" title="Editar Categoría"><i class="fa fa-pencil"></i></a></td>
                                <td><a class="btn btn-danger" href="<?php echo e(route('admin.category.delete',$category)); ?>" data-toggle="tooltip" data-placement="bottom" title="Eliminar Categoría"><i class="fa fa-eraser"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <?php echo e($categories->links()); ?>

            
            <a href="<?php echo e(route('admin.category.create')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Category"><i class="fa fa-plus-circle"></i></a>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>