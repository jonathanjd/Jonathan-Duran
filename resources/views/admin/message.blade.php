<!-- jQuery -->
<script src="{{ asset('template-admin/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- PNotify -->
<script src="{{ asset('template-admin/vendors/pnotify/dist/pnotify.js') }}"></script>
<script src="{{ asset('template-admin/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
<script src="{{ asset('template-admin/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>

@if (session()->has('flash_notification.message'))
	
	<script type="text/javascript">

		$(document).ready(function(){

			new PNotify({
				title: 'Excelente!',
	            text: '{!! session('flash_notification.message') !!}',
	            type: 'success',
	            styling: 'bootstrap3'
			});

		});

	</script>

@endif

