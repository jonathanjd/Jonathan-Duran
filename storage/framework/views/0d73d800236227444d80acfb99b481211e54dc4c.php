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
            <li class="list-group-item"><i class="fa fa-check"></i>  <?php echo e($feature->description); ?></li>
          <?php endforeach; ?>
          
        </ul>

        <div class="text-center">
          <a class="button aqua button-3d effect fill-vertical" href=""><span>CONTRATAR</span></a>
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

   
    <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>
                        <div class="m-t-30">
                            <form id="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="subject">Your Subject</label>
                                        <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Subject...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                </div>
                                <input type="text" class="hidden" id="widget-contact-form-antispam" name="widget-contact-form-antispam" value="" />
                                <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </form>
                            <script type="text/javascript">
                                jQuery("#widget-contact-form").validate({

                                    submitHandler: function(form) {

                                        jQuery(form).ajaxSubmit({
                                            success: function(text) {
                                                if (text.response == 'success') {
                                                    $.notify({
                                                        message: "We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible."
                                                    }, {
                                                        type: 'success'
                                                    });
                                                    $(form)[0].reset();

                                                } else {
                                                    $.notify({
                                                        message: text.message
                                                    }, {
                                                        type: 'danger'
                                                    });
                                                }
                                            }
                                        });
                                    }
                                });

                            </script>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-uppercase">Address & Map</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                  <strong>Polo, Inc.</strong><br>
                                  795 Folsom Ave, Suite 600<br>
                                  San Francisco, CA 94107<br>
                                  <abbr title="Phone">P:</abbr> (123) 456-7890
                                  </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                  <strong>Polo Office</strong><br>
                                  795 Folsom Ave, Suite 600<br>
                                  San Francisco, CA 94107<br>
                                  <abbr title="Phone">P:</abbr> (123) 456-7890
                                  </address>
                            </div>
                        </div>

                        <!-- Google map sensor -->
                        <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
                        <div class="map m-t-30" data-map-address="Melburne, Australia" data-map-zoom="10" data-map-icon="images/markers/marker2.png" data-map-type="ROADMAP"></div>
                        <!-- Google map sensor -->

                    </div>
                </div>
    
  </div>
</section>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('polo.main.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>