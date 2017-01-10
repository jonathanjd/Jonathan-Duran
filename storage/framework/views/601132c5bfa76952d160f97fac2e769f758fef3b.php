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
                      <button class="btn btn-default" type="button"><i class="fa fa-check-square"></i></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

              <?php echo $__env->yieldContent('main_content'); ?>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $__env->yieldContent('title-content-2'); ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Opción 1</a>
                          </li>
                          <li><a href="#">Opción 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php echo $__env->yieldContent('content'); ?>
                  </div>
                </div>
              </div>
            </div>


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

    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('template-admin/build/js/custom.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>

    <?php echo $__env->yieldContent('script'); ?>

  </body>
</html>
