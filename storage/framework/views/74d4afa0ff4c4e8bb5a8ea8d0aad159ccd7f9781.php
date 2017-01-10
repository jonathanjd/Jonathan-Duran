<?php $__env->startSection('title','Presupuesto'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Heading -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <h1 class="page-header">Presupuesto
                    <small>Seleccione un Diseño...</small>
                </h1>
            </div>
        </div>
<!-- /.row -->

		<div class="row">
			<div class="col-md-8 col-md-offset-2">

						<?php foreach($designs as $design): ?>

              <div class="row">
                <div class="col-md-6">
                  <div>
                    <h3 class="text-left"><?php echo e($design->name); ?></h3>
                    <p class="text-justify"><?php echo e($design->content); ?></p>
                  </div>

                  <div class="form-group">
										<a href="<?php echo e($design->url); ?>" class="btn btn-info btn-block" target="_blank">Ver Demo <i class="glyphicon glyphicon-eye-open"></i></a>
									</div>
									<div class="form-group">
										<a href="<?php echo e(route('presupuesto.diseño.servicios',$design)); ?>" class="btn btn-success btn-block">Seleccionar <i class="glyphicon glyphicon-ok-circle"></i></a>
									</div>
                </div>
                <div class="col-md-6 imagen-diseño">
                  	<img src="<?php echo e(asset('design/'.$design->image)); ?>" alt="" class="img-responsive img-thumbnail center-block">
                </div>
              </div>

              <br>
              <hr>

						<?php endforeach; ?>



                <!-- Pagination Start-->
      					<div class="text-center">
      						<?php echo e($designs->links()); ?>

      					</div>
      					<!-- Pagination End -->


			</div>

		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.page.presupuesto.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>