<?php $__env->startSection('title','Servicios-Presupuesto'); ?>

<?php $__env->startSection('content'); ?>
	<!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Presupuesto
                    <small>Servicios...</small>
                </h1>
            </div>
        </div>
<!-- /.row -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Formulario</h3>
				</div>
				<div class="panel-body">

					<!-- Mi Diseño Start-->
					<div class="col-md-6">
						<div>
							<h3 class="text-center">Mi Diseño</h3>
						</div>
						<div>
							<img src="<?php echo e(asset('design/'.$design->image)); ?>" alt="" class="img-responsive img-thumbnail">
						</div>
						<div>
							<p class="text-center"><strong><?php echo e($design->name); ?></strong></p>
						</div>
					</div>
					<!-- Mi Diseño End-->

					<!-- Servicios Start-->
					<div class="col-md-6">
						<div>
							<h3 class="text-center">Servicios</h3>
							<?php echo Form::open(['route' => ['presupuesto.diseño.servicios.datos',$design->id],'method' => 'GET']); ?>

							<?php foreach($services as $service): ?>
								<?php if($service->id == 5): ?>
									<p class="text-left"> <i class="glyphicon glyphicon-globe"></i> <strong><?php echo e($service->name); ?></strong></p>
									<p class="text-justify"><i class="glyphicon glyphicon-list"></i><strong> Descripción:</strong> <?php echo e($service->description); ?></p>
									<p class="text-left"> <i class="glyphicon glyphicon-usd"></i> <strong>Costo: <?php echo e($service->price); ?> BsF</strong></p>
									<hr>
								<?php endif; ?>

								<?php if($service->id == 8): ?>

									<p class="text-left"><i class="glyphicon glyphicon-hdd"></i> <strong> <?php echo e($service->name); ?></strong></p>
									<p class="text-justify"><i class="glyphicon glyphicon-list"></i><strong> Descripción:</strong> <?php echo e($service->description); ?></p>
									<p class="text-left"> <i class="glyphicon glyphicon-usd"></i> <strong>Costo: <?php echo e($service->price); ?> BsF</strong></p>
									<hr>
								<?php endif; ?>

								<?php if($service->id == 7): ?>

									<p class="text-left"><i class="glyphicon glyphicon-list-alt"></i> <strong> <?php echo e($service->name); ?></strong></p>
									<p class="text-justify"><i class="glyphicon glyphicon-list"></i><strong> Descripción:</strong> <?php echo e($service->description); ?></p>
									<p class="text-left"> <i class="glyphicon glyphicon-usd"></i> <strong>Costo: <?php echo e($service->price); ?> BsF</strong></p>
									<?php if($service->available == 1): ?>
										<div class="form-group">
										<?php echo Form::label('blog-noticia','Agregar Sección de Blog/Noticia?'); ?>

										<?php echo Form::select('blog-noticia', ['si' => 'Si', 'no' => 'No'], 'no',['class' => 'form-control']); ?>

										</div>
									<?php else: ?>
										<div class="form-group">
										<?php echo Form::label('blog-noticia','Agregar Sección de Blog/Noticia?'); ?>

										<?php echo Form::select('blog-noticia', ['si' => 'Si', 'no' => 'No'], 'no',['class' => 'form-control','disabled' => '']); ?>

										</div>
									<?php endif; ?>


									<hr>
								<?php endif; ?>

								<?php if($service->id == 6): ?>

									<p class="text-left"><i class="glyphicon glyphicon-shopping-cart"></i> <strong> <?php echo e($service->name); ?></strong></p>
									<p class="text-justify"><i class="glyphicon glyphicon-list"></i><strong> Descripción:</strong> <?php echo e($service->description); ?></p>
									<p class="text-left"> <i class="glyphicon glyphicon-usd"></i> <strong>Costo: <?php echo e($service->price); ?> BsF</strong></p>
									<?php if($service->available == 1): ?>
										<div class="form-group">
										<?php echo Form::label('blog-noticia','Agregar Sección de Carrito de Compras?'); ?>

										<?php echo Form::select('blog-noticia', ['si' => 'Si', 'no' => 'No'], 'no',['class' => 'form-control']); ?>

										</div>
									<?php else: ?>
										<div class="form-group">
										<?php echo Form::label('blog-noticia','Agregar Sección de Carrito de Compras?'); ?>

										<?php echo Form::select('blog-noticia', ['si' => 'Si', 'no' => 'No'], 'no',['class' => 'form-control','disabled' => '']); ?>

										</div>
									<?php endif; ?>


									<hr>
								<?php endif; ?>

							<?php endforeach; ?>

              <div class="text-center">
                <h3>Datos Clientes</h3>
              </div>

              <div class="form-group">
                <?php echo Form::label('Nombre Cliente:'); ?>

                <?php echo Form::text('customer',null,['class' => 'form-control']); ?>

              </div>

              <div class="form-group">
                <?php echo Form::label('Correo Cliente:'); ?>

                <?php echo Form::text('email',null,['class' => 'form-control']); ?>

              </div>

              <div class="form-group">
                <?php echo Form::label('Mensaje Cliente:'); ?>

                <?php echo Form::textarea('message',null,['class' => 'form-control']); ?>

              </div>

							<div class="form-group">
								<?php echo Form::submit('Crear Presupuesto',['class' => 'form-control btn-success']); ?>

							</div>


							<?php echo Form::close(); ?>

						</div>
					</div>
					<!-- Servicios End -->
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.page.presupuesto.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>