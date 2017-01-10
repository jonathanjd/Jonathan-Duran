<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Blog Clon">
    <meta id="token" name="token" value="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?> | Blog Clon</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('template-web/img/logo/favicon.png')); ?>" />
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/4-col-portfolio.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Lobster" rel="stylesheet">

    <link href="<?php echo e(asset('css/base.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('stylesheet'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php echo $__env->make('web.page.design.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Page Content -->
    <div class="container" id="main-vue">

        <?php echo $__env->yieldContent('content'); ?>

        <hr>

        <?php echo $__env->make('web.page.design.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <?php echo $__env->yieldContent('script'); ?>

</body>

</html>
