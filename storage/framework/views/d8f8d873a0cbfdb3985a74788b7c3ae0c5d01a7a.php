<?php $__env->startSection('title','Delete-Tag'); ?>

<?php $__env->startSection('title-content-1','Tag'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

            <a href="<?php echo e(route('admin.tag.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

			<div class="x_panel">
				<div class="x_title">
					<h2>Tabla Tag<small>Eliminar Tag</small></h2>
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

                    <?php echo $__env->make('admin.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <h3><?php echo e($tag->name); ?> <small>Deseas Eliminar este Registro?</small></h3>
					
                    <?php echo Form::open(['route'=> ['admin.tag.destroy',$tag],'method' => 'DELETE','class' => 'form-horizontal form-label-left input_mask']); ?>

                
                        <button type="submit" name="dalete" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-eraser"></i></button>
                 
                    <?php echo Form::close(); ?>

				</div>
			</div>

            <a href="<?php echo e(route('admin.tag.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>