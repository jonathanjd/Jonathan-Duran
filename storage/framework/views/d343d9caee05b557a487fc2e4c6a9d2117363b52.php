<?php $__env->startSection('title','Inicio-Service'); ?>

<?php $__env->startSection('title-content-1','Inicio-Service | Admin'); ?>

<?php $__env->startSection('title-content-2','Servicio'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="x_content">
        <a class="btn btn-success btn-block" href="<?php echo e(route('admin.service.create')); ?>" data-toggle="tooltip" data-placement="bottom" title="Crear Service"><i class="fa fa-plus-circle"></i></a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>PRECIO</th>
                        <th>DISPONIBLE</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($services as $service): ?>
                    <tr>
                        <td><?php echo e($service->id); ?></td>
                        <td>
                                <img src="<?php echo e(asset('service/'.$service->image)); ?>" alt="..." class="img-responsive img-thumbnail center-block" height="150" width="150">
                        </td>
                        <td><?php echo e($service->name); ?></td>
                        <td><?php echo e($service->description); ?></td>
                        <td><?php echo e($service->price); ?></td>
                        <td>
                        <?php if($service->available == 1): ?>
                        <span class="label label-success center-block">Si</span>
                        <?php else: ?>
                        <span class="label label-danger center-block">No</span>
                        <?php endif; ?>
                        </td>
                        <td><a class="btn btn-warning" href="<?php echo e(route('admin.service.edit', $service)); ?>" data-toggle="tooltip" data-placement="bottom" title="Editar Servicio"><i class="fa fa-pencil"></i></a></td>
                        <td>
                        <?php echo Form::open(['route' => ['admin.service.destroy',$service],'method' => 'DELETE']); ?>

                        
                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar Servicio"><i class="fa fa-eraser"></i></button>
                        <?php echo Form::close(); ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?php echo e($services->links()); ?>


            <a class="btn btn-success btn-block" href="<?php echo e(route('admin.service.create')); ?>" data-toggle="tooltip" data-placement="bottom" title="Crear Servicio"><i class="fa fa-plus-circle"></i></a>
        </div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>