<?php $__env->startSection('title','Servicio'); ?>
<?php $__env->startSection('content_part'); ?>

<section id="page-title" style="background: url('/template-polo/images/parallax/18.jpg')" data-stellar-background-ratio="0.6" class="page-title-center page-title-animate page-title-parallax text-light">
  <div class="background-overlay"></div>
  <div class="container">
    <div class="page-title col-md-8 text-shadow-dark">
      <h1 class="text-uppercase text-medium"><?php echo e($plan->name); ?></h1>
      <span>A continuación conoce las características que posee <?php echo e($plan->name); ?>...</span>
    </div>
    <div class="breadcrumb col-md-4">
      <ul>
        <li><a href="<?php echo e(route('index')); ?>"><i class="fa fa-home"></i></a>
        </li>
        <li><a href="#">Servicio</a>
        </li>
        <li><a href="#"><?php echo e($plan->service->name); ?></a>
        </li>
        <li class="active"><a href="#"><?php echo e($plan->name); ?></a>
        </li>
      </ul>
    </div>
  </div>
</section>

<section>
  <div class="container">

    <div class="row m-b-60">
      <div class="col-md-6">
        <h3><?php echo e($plan->name); ?></h3>
        <ul class="list-group">

          <?php foreach($plan->features as $feature): ?>
          <li class="list-group-item"><i class="fa fa-check"></i> <?php echo e($feature->description); ?></li>
          <?php endforeach; ?>

        </ul>

        <div class="text-center">
          <a class="button color button-3d rounded effect fill-vertical" href="<?php echo e(route('servicio_contratar',$plan)); ?>"><span>CONTRATAR</span></a>
        </div>
        
      </div>
      <div class="col-md-6">
        <h3>Accesos Rápidos:</h3>
        <div class="list-group">
          <?php foreach($plans as $plan): ?>

          <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-star"></span> <?php echo e($plan->name); ?>

          </a>

          <?php endforeach; ?>

        </div>
      </div>

      <div class="seperator"><i class="fa fa-cog fa-spin"></i>

      </div>
      <?php echo $__env->make('polo.part.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>


</section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('polo.main.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>