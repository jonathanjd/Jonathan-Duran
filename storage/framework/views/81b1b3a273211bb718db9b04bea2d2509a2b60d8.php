<?php $__env->startSection('title','Mostrar Post'); ?>

<?php $__env->startSection('title-content-1','Post'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

			<?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			<a href="<?php echo e(route('admin.post.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla <small>Mostrar Post</small></h2>
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

					<div>
						<img class="img-responsive img-thumbnail center-block" src="<?php echo e(asset('post/'.$post->images[0]->name)); ?>" alt="" height="250" width="250">
					</div>

					<h3 class="text-center"><?php echo e($post->title); ?> <small>Category: <?php echo e($post->category->name); ?></small></h3>

							<?php echo $post->content; ?>


					<hr>
					<p>
						<strong>Tags:</strong> |
						<?php foreach($post->tags as $tag): ?>
							<?php echo e($tag->name); ?> |
						<?php endforeach; ?>
					</p>


					<p>
						<strong>Creado Por:</strong><?php echo e($post->user->name); ?>

					</p>

				</div>
			</div>

			<a href="<?php echo e(route('admin.post.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>