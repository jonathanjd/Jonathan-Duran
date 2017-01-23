<!-- jQuery -->
<script src="<?php echo e(asset('template-admin/vendors/jquery/dist/jquery.min.js')); ?>"></script>
<!-- PNotify -->
<script src="<?php echo e(asset('template-admin/vendors/pnotify/dist/pnotify.js')); ?>"></script>
<script src="<?php echo e(asset('template-admin/vendors/pnotify/dist/pnotify.buttons.js')); ?>"></script>
<script src="<?php echo e(asset('template-admin/vendors/pnotify/dist/pnotify.nonblock.js')); ?>"></script>

<?php if(session()->has('flash_notification.message')): ?>
	
	<script type="text/javascript">

		$(document).ready(function(){

			new PNotify({
				title: 'Excelente!',
	            text: '<?php echo session('flash_notification.message'); ?>',
	            type: 'success',
	            styling: 'bootstrap3'
			});

		});

	</script>

<?php endif; ?>

