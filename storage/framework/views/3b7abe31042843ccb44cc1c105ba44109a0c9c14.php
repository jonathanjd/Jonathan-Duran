<?php $__env->startSection('title','Galería'); ?>

<?php $__env->startSection('title-content-1','Galería Video Admin'); ?>

<?php $__env->startSection('main_content'); ?>

  <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="row">

    <ol class="breadcrumb">
      <li><a href="<?php echo e(route('admin-galeria')); ?>">Galería</a></li>
      <li><a href="<?php echo e(route('admin-galeria-video')); ?>">Galería de Video</a></li>
      <li class="active">Editar Video</li>
    </ol>

  </div>

  <div id="app">
  <div class="row">

  <div class="col-md-6 col-sm-6 col-xs-12">

    <div>
        <a href="<?php echo e(route('admin-galeria-video')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
    </div>

      <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <div class="x_panel">
          <div class="x_title">
              <h2>Tabla Video <small>Nuestros Videos De Programación Web</small></h2>
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

            <h3><?php echo e($video->name); ?> <small>Categoría: <?php echo e($video->course->name); ?></small></h3>

            <p><?php echo $video->content; ?></p>

            <img class="img-responsive img-thumbnail center-block" src="<?php echo e(asset('video/'.$video->image)); ?>" alt="">

            <br>
            <br>

            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo e(substr($video->url, 32)); ?>" frameborder="0" allowfullscreen></iframe>
            </div>

          </div>
      </div>

      <div>
          <a href="<?php echo e(route('admin-galeria-video')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
      </div>

  </div>

  </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>