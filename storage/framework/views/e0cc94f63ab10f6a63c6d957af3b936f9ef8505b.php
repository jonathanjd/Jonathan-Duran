<?php $__env->startSection('title','Inicio-Design'); ?>

<?php $__env->startSection('title-content-1','Inicio-Design | Admin'); ?>

<?php $__env->startSection('title-content-2','Diseño'); ?>

<?php $__env->startSection('content'); ?>


        <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="x_content">
        <a class="btn btn-success btn-block" href="<?php echo e(route('admin.design.create')); ?>" data-toggle="tooltip" data-placement="bottom" title="Crear Diseño"><i class="fa fa-plus-circle"></i></a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>URL</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($designs as $design): ?>
                    <tr>
                        <td><?php echo e($design->id); ?></td>
                        <td>
                        		<img src="<?php echo e(asset('design/'.$design->image)); ?>" alt="..." class="img-responsive img-thumbnail center-block" height="150" width="150">
                        </td>
                        <td><?php echo e($design->name); ?></td>
                        <td>
                        <a href="<?php echo e($design->url); ?>" target="_blank">Ver Demo</a>
                        </td>
                        <td><a class="btn btn-warning" href="<?php echo e(route('admin.design.edit', $design)); ?>" data-toggle="tooltip" data-placement="bottom" title="Editar Diseño"><i class="fa fa-pencil"></i></a></td>
                        <td>
                        <?php echo Form::open(['route' => ['admin.design.destroy',$design],'method' => 'DELETE']); ?>

                        
                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar Diseño"><i class="fa fa-eraser"></i></button>
                        <?php echo Form::close(); ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php echo e($designs->links()); ?>

        	<a class="btn btn-success btn-block" href="<?php echo e(route('admin.design.create')); ?>" data-toggle="tooltip" data-placement="bottom" title="Crear Diseño"><i class="fa fa-plus-circle"></i></a>
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