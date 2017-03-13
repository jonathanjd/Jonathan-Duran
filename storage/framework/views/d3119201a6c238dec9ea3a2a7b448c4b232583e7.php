<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta id="token"name="token" value="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('template-polo/images/favicon.png')); ?>">
    <title>Blog Clon - <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="Author" content="BlogClon.com.ve" />
    <meta name="owner" content="Jonathan David Duran Segovia" />
    <?php echo $__env->yieldContent('meta'); ?>

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
    <script src="<?php echo e(asset('js/contact.js')); ?>"></script>
    <script src="<?php echo e(asset('js/rrssb.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>

</body>

</html>
