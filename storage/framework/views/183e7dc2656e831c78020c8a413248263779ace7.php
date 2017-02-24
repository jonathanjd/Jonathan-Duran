<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token"name="token" value="<?php echo e(csrf_token()); ?>">
    <title>Administrador | <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('template-web/img/logo/favicon.png')); ?>" />
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('template-admin/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('template-admin/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('template-admin/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- PNotify -->
    <link href="<?php echo e(asset('template-admin/vendors/pnotify/dist/pnotify.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('template-admin/vendors/pnotify/dist/pnotify.buttons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('template-admin/vendors/pnotify/dist/pnotify.nonblock.css')); ?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo e(asset('template-admin/vendors/select2/dist/css/select2.min.css')); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('template-admin/build/css/custom.min.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('stylesheet'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo e(route('admin-index')); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Admin Blog Clon!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php echo $__env->make('admin.menu_profile_quick', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php echo $__env->make('admin.side_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php echo $__env->make('admin.menu_footer_button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php echo $__env->make('admin.top_navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3><?php echo $__env->yieldContent('title-content-1'); ?></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

              <?php echo $__env->yieldContent('main_content'); ?>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php echo $__env->make('admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('template-admin/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('template-admin/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('template-admin/vendors/fastclick/lib/fastclick.js')); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('template-admin/vendors/nprogress/nprogress.js')); ?> "></script>
    <!-- Select2 -->
    <script src="<?php echo e(asset('template-admin/vendors/select2/dist/js/select2.full.min.js')); ?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('template-admin/build/js/custom.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>

    <?php echo $__env->yieldContent('script'); ?>

  </body>
</html>
