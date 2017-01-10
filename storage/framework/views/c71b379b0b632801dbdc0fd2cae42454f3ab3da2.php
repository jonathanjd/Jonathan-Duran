<?php $__env->startSection('title','Datos-Presupuesto'); ?>

<?php $__env->startSection('content'); ?>
	<!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Presupuesto
                    <small>Datos...</small>
                </h1>
            </div>
        </div>
<!-- /.row -->
	<div class="row">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Crear Presupuesto</h3>
			</div>
			<div class="panel-body">
				<div class="col-md-4">
					<div class="text-center">
						<h3>Mi Diseño</h3>
						<span class="label label-primary"><?php echo e($design->name); ?></span>
					</div>
					<div>
						<img src="<?php echo e(asset('design/'.$design->image)); ?>" alt="" class="img-responsive img-thumbnail">
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.page.presupuesto.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>