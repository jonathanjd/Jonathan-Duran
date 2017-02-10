<?php $__env->startSection('title','Contratar - '.$plan->name); ?>
<?php $__env->startSection('content_part'); ?>


<section id="page-title" style="background: url('/template-polo/images/parallax/codigo-servicio-blog-clon.jpg')" data-stellar-background-ratio="0.6" class="page-title-center page-title-animate page-title-parallax text-light">
  <div class="background-overlay"></div>
  <div class="container">
    <div class="page-title col-md-8 text-shadow-dark">
      <h1 class="text-uppercase text-medium">Contratar</h1>
      <span>¡Ahora es más fácil contratar tu plan de Sitio Web!</span>
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
  <div class="container" id="vue_hire">

    <div class="row m-b-60">
      <div class="col-md-6">
        <h3><?php echo e($plan->name); ?></h3>
        <p>Por favor selecciona una de las siguientes opciones para iniciar la contratación de tu plan(<?php echo e($plan->name); ?>):<p>

        <div class="accordion toggle color">

          <div class="ac-item">
            <h5 class="ac-title"><i class="fa fa-phone"></i>Llámenme</h5>
            <div class="ac-content">
              <p>Por favor llena el siguiente formulario para llamarte:</p>
              <!-- Start Formulario Llamada -->

              <div v-if="mensajeSuccessCall" role="alert" class="alert alert-success alert-dismissible">
                <button v-on:click="cerrarMensajeCall" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <strong>Excelente!</strong> El Proceso se realizo con Éxito!.
              </div>

              <form method="post" @submit="onSubmitFormCall">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="name">Plan que deseas contratar:</label>
										<input type="text" class="form-control required" name="plan" v-model="call.plan" placeholder="Nombre Del Plan" id="name" aria-required="true">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="email">Diseño</label>
										<input type="text" class="form-control required" name="design" v-model="call.design" placeholder="Nombre Del Diseño" id="design" aria-required="true">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="phone">Cliente</label>
										<input type="text" class="form-control required" name="name" v-model="call.name" placeholder="Nombre Cliente" id="phone" aria-required="true">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="company">Teléfono</label>
										<input type="text" class="form-control required" name="phone" v-model="call.phone" placeholder="Teléfono Cliente" id="company" aria-required="true">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group text-center">
										<button v-if="mostrarSubmitCall" class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Llámenme</button>
                    <button v-else class="btn btn-primary" disabled="disabled" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Llámenme</button>
									</div>
								</div>
							</div>
						</form>
            <!-- End Formulario de Llamada-->
            </div>
          </div>

          <div class="ac-item">
            <h5 class="ac-title"><i class="fa fa-envelope"></i>Contáctenme por Correo</h5>
            <div class="ac-content">
            <p>Por favor llena el siguiente formulario para enviarte la información por correo:</p>
            <!-- Start Formulario Correo -->

							<div v-if="mensajeSuccessEmail" role="alert" class="alert alert-success alert-dismissible">
                <button v-on:click="cerrarMensajeEmail" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <strong>Excelente!</strong> El Proceso se realizo con Éxito!.
              </div>

              <form method="post" @submit="onSubmitFormEmail">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="name">Plan que deseas contratar:</label>
										<input type="text" class="form-control required" name="plan" v-model="correo.plan" placeholder="Nombre Del Plan" id="name" aria-required="true">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="email">Diseño</label>
										<input type="text" class="form-control required" name="design" v-model="correo.design" placeholder="Nombre Del Diseño" id="design" aria-required="true">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="phone">Cliente</label>
										<input type="text" class="form-control required" name="name" v-model="correo.name" placeholder="Nombre Cliente" id="phone" aria-required="true">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="upper" for="company">Correo</label>
										<input type="text" class="form-control required" name="email" v-model="correo.email" placeholder="Correo Cliente" id="company" aria-required="true">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group text-center">
										<button v-if="mostrarSubmitEmail" class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Recibir Correo</button>
                  	<button v-else class="btn btn-primary" disabled="disabled" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Recibir Correo</button>
									</div>
								</div>
							</div>
						</form>
            <!-- End Formulario de Correo-->
            </div>
          </div>

        </div>




      </div>
      <div class="col-md-6">
        <h3>Accesos Rápidos:</h3>
        <div class="list-group">
          <?php foreach($plans as $plan): ?>

          <a href="<?php echo e(route('servicio', $plan)); ?>" class="list-group-item">
            <span class="glyphicon glyphicon-star"></span> <?php echo e($plan->name); ?>

          </a>

          <?php endforeach; ?>

        </div>
      </div>

      </div>

      <!--Portfolio Carousel -->
				<div class="hr-title hr-long center"><abbr>Nuestros Diseños</abbr> </div>
				<div class="carousel">

          <?php foreach($designs as $design): ?>
          <!-- Item Diseño -->
          <div class="portfolio-item design artwork">
            <div class="portfolio-image effect social-links">
              <img src="<?php echo e(asset('design/'.$design->image)); ?>" alt="">
              <div class="image-box-content">
                <p>
                  <a href="<?php echo e(asset('design/'.$design->image)); ?>" data-lightbox-type="image" title="<?php echo e($design->name); ?>"><i class="fa fa-expand"></i></a>
                  <a href="<?php echo e($design->url); ?>" target="_blank"><i class="fa fa-link"></i></a>

                </p>
              </div>
            </div>
            <div class="portfolio-description">
              <h4 class="title"><?php echo e($design->name); ?></h4>
              <p><i class="fa fa-tag"></i>Diseño / Bootstrap</p>
            </div>
            <div class="portfolio-date">
              <p class="small"><i class="fa fa-calendar-o"></i><?php echo e($design->created_at->format('Y')); ?></p>
            </div>
          </div>
          <!-- Item Diseño -->
          <?php endforeach; ?>

				</div>

				<!--Portfolio Carousel -->

      <div class="seperator"><i class="fa fa-cog fa-spin"></i></div>

      <?php echo $__env->make('polo.part.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>


</section>

<!-- Social -->
<?php echo $__env->make('polo.part.socialrrssb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- END: SOCIAL -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/service_hire.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('polo.main.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>