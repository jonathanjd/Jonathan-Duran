<?php $__env->startSection('title','Crear-Tag'); ?>

<?php $__env->startSection('title-content-1','Tag'); ?>

<?php $__env->startSection('main_content'); ?>

<div class="app">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">

            
            <a href="<?php echo e(route('admin.tag.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
  

			<div class="x_panel">
				<div class="x_title">
					<h2>Formulario Tag<small>Crear Tag</small></h2>
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

                    <?php echo $__env->make('admin.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <?php echo Form::open(['route' => 'admin.tag.store','method' => 'POST','class' => 'form-horizontal form-label-left input_mask','files' => true,'data-parsley-validate' => '']); ?>


                    <div class="form-group">
                        <?php echo Form::label('name','Name:',['class' => 'control-label col-md-3']); ?>

                        <div class="col-md-9">
                          <?php echo Form::text('name', null,['class' => 'form-control','data-parsley-required' => '']); ?>

                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar"><i class="fa fa-save"></i></button>
                    </div>      
        

                    <?php echo Form::close(); ?>

					
				</div>
			</div>

            <a href="<?php echo e(route('admin.tag.index')); ?>" class="btn btn-primary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>