<?php $__env->startSection('title','Inicio-Plan'); ?>

<?php $__env->startSection('title-content-1','Plan'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="app">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">

            <a class="btn btn-success btn-block" href="<?php echo e(route('admin.plan.create')); ?>" data-toggle="tooltip" data-placement="bottom" title="Crear Plan"><i class="fa fa-plus-circle"></i></a>

            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabla Planes <small>Nuestros Planes Web</small></h2>
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

                <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>ENABLE</th>
                            <th>MOSTRAR</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($plans as $plan): ?>
                        <tr>
                            <td><?php echo e($plan->id); ?></td>

                            <td><?php echo e($plan->name); ?></td>

                            <td><?php echo e($plan->price); ?></td>

                            <?php if($plan->enable == 'yes'): ?>
                              <td class="text-center"><span class="label label-success">Si</span></td>
                            <?php else: ?>
                              <td class="text-center"><span class="label label-danger">No</span></td>
                            <?php endif; ?>

                            <td><a class="btn btn-primary" href="<?php echo e(route('admin.plan.show',$plan)); ?>" data-toggle="tooltip" data-placement="bottom" title="Ver Plan"><i class="fa fa-eye"></i></a></td>

                            <td><a class="btn btn-warning" href="<?php echo e(route('admin.plan.edit', $plan)); ?>" data-toggle="tooltip" data-placement="bottom" title="Editar Plan"><i class="fa fa-pencil"></i></a></td>
                            <td>
                            <?php echo Form::open(['route' => ['admin.plan.destroy',$plan],'method' => 'DELETE']); ?>


                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar Plan"><i class="fa fa-eraser"></i></button>
                            <?php echo Form::close(); ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                </div>
            </div>

            <a class="btn btn-success btn-block" href="<?php echo e(route('admin.plan.create')); ?>" data-toggle="tooltip" data-placement="bottom" title="Crear Plan"><i class="fa fa-plus-circle"></i></a>

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