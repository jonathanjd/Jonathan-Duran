<?php $__env->startSection('title','Galería Share'); ?>

<?php $__env->startSection('stylesheet'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap_file_field.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/parsley.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title-content-1','Galería Share Admin'); ?>

<?php $__env->startSection('main_content'); ?>

  <div class="row">

    <ol class="breadcrumb">
      <li><a href="<?php echo e(route('admin-galeria')); ?>">Galería</a></li>
      <li><a href="<?php echo e(route('admin-galeria-post')); ?>">Galería de Post</a></li>
      <li class="active">Post Image Share</li>
    </ol>

      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
              <h2>Share Image<small> Post</small></h2>
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

            <h3 class="text-center">Formulario</h3>
            <?php echo Form::open(['route' => 'admin-galeria-share-image-post-store','method' => 'POST','files' => true,'data-parsley-validate' => '']); ?>


            <div class="form-group">
              <?php echo Form::label('title','Title:',['class' => 'control-label']); ?>

              <?php echo Form::text('title', null,['class' => 'form-control', 'required' => '']); ?>

            </div>

            <div class="form-group">
              <?php echo Form::label('description','Description:',['class' => 'control-label']); ?>

              <?php echo Form::text('description', null,['class' => 'form-control', 'required' => '']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('image','Image:',['class' => 'control-label']); ?>

                <input type="file" name="image" value="" data-field-type="bootstrap-file-filed" data-preview="on" data-file-types="image/jpeg,image/png,image" data-btn-class="btn-primary" required data-parsley-dimensions-options="{'width':'1200','height':'630'}">
            </div>

            <?php echo Form::hidden('post_id', $post->id); ?>


            <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar"><i class="fa fa-save"></i></button>
            </div>

            <?php echo Form::close(); ?>

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="x_panel">
          <div class="x_title">
              <h2>My Image<small> Post</small></h2>
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

            <img class="img img-responsive img-rounded" src="<?php echo e(asset('post/'.$post->images[0]->name)); ?>" alt="">

            <h3 class="text-center"><?php echo e($post->title); ?></h3>

            <hr>

            <?php echo $post->content; ?>


          </div>
        </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/bootstrap_file_field.js')); ?>"></script>
<script src="<?php echo e(asset('js/parsley.js')); ?>"></script>
<script src="<?php echo e(asset('js/laravel-parsley.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>