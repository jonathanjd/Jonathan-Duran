<?php $__env->startSection('title','Show-Category'); ?>

<?php $__env->startSection('title-content-1','Show-Category | Admin'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

			<a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

			<?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			
			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla Category <small>Nuestra Categoría de Blog</small></h2>
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
					<h3>Datos:</h3>

			        <p><strong>ID:</strong> <?php echo e($category->id); ?></p>

			        <p><strong>Name:</strong> <?php echo e($category->name); ?></p>

				</div>
			</div>

			<a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

		</div>
	</div>	
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>