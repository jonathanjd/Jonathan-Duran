<?php $__env->startSection('title','Social'); ?>

<?php $__env->startSection('title-content-1','Social Admin'); ?>

<?php $__env->startSection('main_content'); ?>

  <div class="row">

      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
              <h2>Mis Datos<small> Social</small></h2>
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
          <div class="x_content" id="vue-social">

            <div v-if="mensajeSuccess" role="alert" class="alert alert-success alert-dismissible">
              <button v-on:click="cerrarMensaje" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
              <strong>Excelente!</strong> Datos Guardado con éxito.
            </div>


            <h3 class="text-center">Formulario</h3>
            <?php echo Form::open(['method' => 'POST','@submit' => 'onSubmitForm']); ?>


            <div class="form-group">
              <?php echo Form::label('correo','Correo:',['class' => 'control-label']); ?>

              <?php echo Form::text('correo', null,['class' => 'form-control', 'v-model' => 'social.correo','type' => 'email']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::label('facebook','Facebook:',['class' => 'control-label']); ?>

              <?php echo Form::text('facebook', null,['class' => 'form-control', 'v-model' => 'social.facebook']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::label('twitter','Twitter:',['class' => 'control-label']); ?>

              <?php echo Form::text('twitter', null,['class' => 'form-control', 'v-model' => 'social.twitter']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::label('youtube','Youtube:',['class' => 'control-label']); ?>

              <?php echo Form::text('youtube', null,['class' => 'form-control', 'v-model' => 'social.youtube']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::label('google','Google:',['class' => 'control-label']); ?>

              <?php echo Form::text('google', null,['class' => 'form-control', 'v-model' => 'social.google']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::label('linkedin','Linkedin:',['class' => 'control-label']); ?>

              <?php echo Form::text('linkedin', null,['class' => 'form-control', 'v-model' => 'social.linkedin']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::label('pinterest','Pinterest:',['class' => 'control-label']); ?>

              <?php echo Form::text('pinterest', null,['class' => 'form-control', 'v-model' => 'social.pinterest']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::label('instagram','Instagram:',['class' => 'control-label']); ?>

              <?php echo Form::text('instagram', null,['class' => 'form-control', 'v-model' => 'social.instagram']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::label('tumblr','Tumblr:',['class' => 'control-label']); ?>

              <?php echo Form::text('tumblr', null,['class' => 'form-control', 'v-model' => 'social.tumblr']); ?>

            </div>
            <div class="form-group">
              <?php echo Form::submit('Guardar',['class' => 'btn btn-success btn-block','data-toggle' => 'tooltip','data-placement' => 'bottom','title' => 'Guardar','v-if' => 'mostrarSubmit']); ?>

              <?php echo Form::submit('Guardar',['class' => 'btn btn-success btn-block','data-toggle' => 'tooltip','data-placement' => 'bottom','title' => 'Guardar','v-else','disabled' => 'disabled']); ?>



            </div>

            <?php echo Form::close(); ?>

          </div>
        </div>
      </div>
  </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/vue/vue-social-admin.js')); ?>"></script>
<script src="<?php echo e(asset('js/parsley.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>