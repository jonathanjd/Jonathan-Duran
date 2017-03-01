<?php $__env->startSection('title','Galería'); ?>

<?php $__env->startSection('title-content-1','Nuestra Galería Admin'); ?>

<?php $__env->startSection('main_content'); ?>

  <div class="row">
      <div class="col-md-12">
          <div class="x_content">
              <div class="row">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-pencil"></i>
                          </div>
                          <div class="count"><?php echo e($posts->count()); ?></div>

                          <h3><a href="<?php echo e(route('admin-galeria-post')); ?>">Post</a></h3>
                          <p>Gallería Media de Post.</p>
                      </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-paint-brush"></i>
                          </div>
                          <div class="count"><?php echo e($designs->count()); ?></div>

                          <h3><a href="<?php echo e(route('admin-galeria-design')); ?>">Diseño</a></h3>
                          <p>Gallería Media de Diseño</p>
                      </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-cubes"></i>
                          </div>
                          <div class="count"><?php echo e($courses->count()); ?></div>

                          <h3><a href="<?php echo e(route('admin-galeria-course')); ?>">Cursos</a></h3>
                          <p>Galería Media de Curso</p>
                      </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                          <div class="icon"><i class="fa fa-youtube-play"></i>
                          </div>
                          <div class="count"><?php echo e($videos->count()); ?></div>

                          <h3><a href="<?php echo e(route('admin-galeria-video')); ?>">Videos</a></h3>
                          <p>Galería Media de Video</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>