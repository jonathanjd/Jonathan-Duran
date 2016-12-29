<?php $__env->startSection('title','Diseños'); ?>

<?php $__env->startSection('stylesheet'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-media-lightbox.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Diseños
                    <small>Nos enfocamos en diseños de páginas web limpias, bien estructuradas y de fácil navegación.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
		
		<?php foreach($diseños as $diseño): ?>
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><?php echo e($diseño->name); ?></h3>
				  </div>
				  <div class="panel-body">
				   	
				   	<div class="row">
				   		<div class="col-md-4">
				   			<a href="<?php echo e(asset('design/'.$diseño->image)); ?>" class="lightbox">
			                    <img class="img-responsive img-rounded center-block" src="<?php echo e(asset('design/'.$diseño->image)); ?>" alt="" height="200" width="200">
			                </a>
			                
				   		</div>
				   		<div class="col-md-4">
				   			<p>
			                	<?php echo e($diseño->content); ?>

			                </p>
				   		</div>
				   		<div class="col-md-4">
				   			<a href="<?php echo e($diseño->url); ?>" target="_blank" class="btn btn-primary btn-block">VER DEMO</a>
				   			<a href="" class="btn btn-success btn-block">PRESUPUESTO</a>
				   		</div>
				   	</div>
				   	
	                

				  </div>
				</div>

				
			</div>
		</div>
		<?php endforeach; ?>
		
        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <?php echo e($diseños->links()); ?>

            </div>
        </div>
        <!-- /.row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/bootstrap-media-lightbox.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.page.design.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>