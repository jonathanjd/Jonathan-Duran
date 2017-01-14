<?php if(session()->has('flash_notification.message')): ?>
    <div class="alert alert-<?php echo e(session('flash_notification.level')); ?>">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <?php echo session('flash_notification.message'); ?>

    </div>
<?php endif; ?>