<?php $__env->startSection('title','Galería'); ?>

<?php $__env->startSection('title-content-1','Galería Video Admin'); ?>

<?php $__env->startSection('main_content'); ?>

  <?php echo $__env->make('admin.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="row">

    <ol class="breadcrumb">
      <li><a href="<?php echo e(route('admin-galeria')); ?>">Galería</a></li>
      <li class="active">Galería de Video</li>
    </ol>
      <div class="col-md-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Galería Media<small> De Video </small></h2>
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

                  <div class="row">
                      <p class="text-center">Elementos</p>
                      <?php foreach($arrayVideos as $video): ?>

                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo e(asset('video/'.$video['nameFile'])); ?>" alt="image" />
                                    <div class="mask">
                                        <p>Opciones</p>
                                        <div class="tools tools-bottom">
                                            <a href="#"><i class="fa fa-link"></i></a>

                                            <?php if(!$video['used'] == true): ?>
                                              <a href="<?php echo e(route('admin-galeria-video-delete',$video['nameFile'])); ?>"><i class="fa fa-times"></i></a>
                                            <?php else: ?>
                                              <a href="<?php echo e(route('admin.video.edit',$video['id'])); ?>"><i class="fa fa-pencil"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <p>Imagen de Video</p>
                                    <?php if($video['used'] == true): ?>
                                      <?php if($video['share'] == null): ?>
                                        <a href="<?php echo e(route('admin-galeria-share-image-video',$video['id'])); ?>" class="btn btn-danger btn-sm"><i class="fa fa-facebook"></i></a>
                                      <?php else: ?>
                                        <a href="<?php echo e(route('admin-galeria-share-image-video',$video['id'])); ?>" class="btn btn-success btn-sm"><i class="fa fa-facebook"></i></a>
                                      <?php endif; ?>
                                      <a href="#" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                    <?php else: ?>
                                      <a href="#" class="btn btn-danger btn-sm" disabled="disabled"><i class="fa fa-facebook"></i></a>
                                      <a href="#" class="btn btn-danger btn-sm" disabled="disabled"><i class="fa fa-check"></i></a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?>
                  </div>
              </div>
          </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>