<?php $__env->startSection('title','Crear Post'); ?>

<?php $__env->startSection('stylesheet'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap_file_field.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/parsley.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('trumbowyg/dist/ui/trumbowyg.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title-content-1','Post'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="app">
	<div class="row">
		<div class="col-md-10 col-sm-10 col-xs-12">

			<a href="<?php echo e(route('admin.post.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

			<div class="x_panel">
				<div class="x_title">
					<h2>Formulario de Post<small>Crear Post</small></h2>
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

					<?php echo $__env->make('admin.message-error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		          <?php echo Form::open(['route' => 'admin.post.store','method' => 'POST','class' => 'form-horizontal form-label-left input_mask','files' => true,'data-parsley-validate' => '']); ?>


		            <div class="form-group">
		              <?php echo Form::label('title','Title:'); ?>

		              <?php echo Form::text('title',null,['class' => 'form-control','placeholder' => 'Ingrese Name','required' => '','data-parsley-length' => '[3,50]']); ?>

		            </div>

		            <div class="form-group">
		                <?php echo Form::label('categoria','Categoría'); ?>

                        <?php echo Form::select('category_id', $categories, null,['class' => 'form-control']);; ?>

		            </div>

		            <div class="form-group">

                        <?php echo Form::label('Seleccione Tags'); ?>

                        <?php echo Form::select('tags[]', $tags, null, ['class' => 'select2_multiple form-control','multiple','required']); ?>


                      </div>

		            <div class="form-group">
		              <?php echo Form::label('content','Content:'); ?>

		              <?php echo Form::textarea('content',null,['class' => 'form-control trumbowyg-text', 'placeholder' => 'Ingrese Content', 'required' => '','minlength' => '10']); ?>


		            </div>

		            <div class="form-group">
		              <?php echo Form::label('Image','Image:'); ?>

		              <?php echo Form::file('image',['data-field-type' => 'bootstrap-file-filed','data-preview' => 'on','data-file-types' => 'image/jpeg,image/png,image/gif','data-btn-class' => 'btn-primary','required' => '']); ?>

		            </div>

		            <div class="form-group">

		                <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar"><i class="fa fa-save"></i></button>

		            </div>

		          <?php echo Form::close(); ?>


				</div>
			</div>

			<a href="<?php echo e(route('admin.post.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Seleccione Tags",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 6,
          placeholder: "Seleccione Tags(Max:6)",
          allowClear: true
        });
      });

    </script>
    <!-- /Select2 -->

  <script src="<?php echo e(asset('js/bootstrap_file_field.js')); ?>"></script>
	<script src="<?php echo e(asset('js/parsley.js')); ?>"></script>
	<script src="<?php echo e(asset('trumbowyg/dist/trumbowyg.min.js')); ?>"></script>

	<script type="text/javascript">
	  $('.trumbowyg-text').trumbowyg();
	</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>