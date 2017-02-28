<?php $__env->startSection('title','Inicio Post'); ?>

<?php $__env->startSection('title-content-1','Post'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

			<?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			<a href="<?php echo e(route('admin.post.create')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Post"><i class="fa fa-plus-circle"></i></a>

			<?php echo e($posts->links()); ?>


			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla <small>Lista de Post</small></h2>
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

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Creado Por</th>
                                <th>Fecha Creación</th>
                                <th>Mostrar</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($posts as $post): ?>
                            <tr>
                                <th scope="row"><?php echo e($post->id); ?></th>
                                <td><?php echo e($post->title); ?></td>
                                <th><?php echo e($post->category->name); ?></th>
                                <th><?php echo e($post->user->name); ?></th>
                                <th><?php echo e($post->created_at->diffForHumans()); ?></th>
                                <td><a class="btn btn-primary" href="<?php echo e(route('admin.post.show',$post)); ?>" data-toggle="tooltip" data-placement="bottom" title="Ver Post"><i class="fa fa-eye"></i></a></td>
                                <td><a class="btn btn-warning" href="<?php echo e(route('admin.post.edit',$post)); ?>" data-toggle="tooltip" data-placement="bottom" title="Editar Post"><i class="fa fa-pencil"></i></a></td>
                                <td><a class="btn btn-danger" href="<?php echo e(route('admin.post.delete',$post)); ?>" data-toggle="tooltip" data-placement="bottom" title="Eliminar Post"><i class="fa fa-eraser"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
					
				</div>
			</div>

			<?php echo e($posts->links()); ?>


			<a href="<?php echo e(route('admin.post.create')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Crear Post"><i class="fa fa-plus-circle"></i></a>
			
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>