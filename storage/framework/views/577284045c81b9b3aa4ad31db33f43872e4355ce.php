<?php $__env->startSection('title','Diseños'); ?>
<?php $__env->startSection('content_part'); ?>

  <!-- PAGE TITLE -->
  <?php echo $__env->make('polo.part.pagetitle', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- END: PAGE TITLE -->

  <!-- SECTION -->
  <section>
      <div class="container portfolio">

          <!-- Portfolio Items -->
          <div id="isotope" class="isotope portfolio-items" data-isotope-col="1" data-isotope-item=".portfolio-item">
              <?php foreach($designs as $design): ?>
                <div class="portfolio-item design">
                    <div class="portfolio-image effect social-links">
                        <img src="<?php echo e(asset('design/'.$design->image)); ?>" alt="">
                        <div class="image-box-content">
                            <p>
                                <a href="<?php echo e(asset('design/'.$design->image)); ?>" data-lightbox-type="image" title="<?php echo e($design->name); ?>"><i class="fa fa-expand"></i></a>
                                <a href="<?php echo e($design->url); ?>" target="_blank" title="Ver Demo"><i class="fa fa-link"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-description">
                        <h4 class="title"><?php echo e($design->name); ?></h4>
                        <p><i class="fa fa-tag"></i>Diseño Web / Bootstrap</p>
                    </div>
                    <div class="portfolio-date">
                        <p class="small"><i class="fa fa-calendar-o"></i><?php echo e($design->created_at->diffForHumans()); ?></p>
                    </div>

                    <div class="portfolio-details">
                        <p class="text-justify"><?php echo e($design->content); ?></p>
                        <br />
                        <a href="#" class="button color rounded button-3d effect icon-top"><span><i class="fa fa-external-link"></i>Más Detalles</span></a>
                    </div>
                </div>
              <?php endforeach; ?>
          </div>
          <!-- END: Portfolio Items -->

      </div>

      <!-- PAGINATION -->
      <div class="text-center">
        <?php echo e($designs->links()); ?>

      </div>

      <!-- END: PAGINATION -->

  </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('polo.main.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>