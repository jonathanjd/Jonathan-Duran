<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta id="token"name="token" value="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('template-polo/images/favicon.png')); ?>">
    <title><?php echo $__env->yieldContent('title'); ?> | Blog Clon</title>

    <?php echo $__env->make('polo.part.stylesheet', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('stylesheet'); ?>

</head>

<body class="wide">

    <!-- WRAPPER -->
    <div class="wrapper">


        <!-- HEADER -->
        <?php echo $__env->make('polo.part.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- END: HEADER -->

        <?php echo $__env->yieldContent('content_part'); ?>

        <!-- REVOLUTION SLIDER -->

        <!-- END REVOLUTION SLIDER -->

        <!-- FOOTER -->
        <?php echo $__env->make('polo.part.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- END: FOOTER -->

    </div>
    <!-- END: WRAPPER -->

    <!-- GO TOP BUTTON -->
    <a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

    <?php echo $__env->make('polo.part.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>

</body>

</html>
