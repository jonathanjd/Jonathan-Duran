<?php $__env->startSection('title','Editar-Design'); ?>

<?php $__env->startSection('stylesheet'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap_file_field.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/parsley.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title-content-1','Editar-Design | Admin'); ?>



<?php $__env->startSection('main_content'); ?>

<div class="app">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">

       <a class="btn btn-success btn-block" href="<?php echo e(route('admin.design.index')); ?>" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>

      <div class="x_panel">
        <div class="x_title">
          <h2>Form Design <small>Editar</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">#</a>
                  </li>
                  <li><a href="#">#</a>
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

          <?php echo Form::open(['route' => ['admin.design.update', $design->id],'method' => 'PUT','class' => 'form-horizontal form-label-left input_mask','files' => true,'data-parsley-validate' => '']); ?>

            
            <div class="form-group">
              <img src="<?php echo e(asset('design/'.$design->image)); ?>" alt="" class="img-responsive img-thumbnail center-block" height="150" width="300">
            </div>
            
            <div class="form-group">
              <?php echo Form::label('name','Name Design:'); ?>

              <?php echo Form::text('name',$design->name,['class' => 'form-control','placeholder' => 'Name Design','required' => '','data-parsley-length' => '[3,50]']); ?>

            </div>

            <div class="form-group">
              <?php echo Form::label('content','Content Design:'); ?>

              <?php echo Form::textarea('content',$design->content,['class' => 'form-control', 'placeholder' => 'Content Design', 'required' => '','data-parsley-length' => '[10,1000]']); ?>

            </div>
            
            <div class="form-group">
              <?php echo Form::label('url','URL Demo:'); ?>

              <?php echo Form::text('url',$design->url,['class' => 'form-control', 'placeholder' => 'URL Demo','required' => '']); ?>

            </div>
            
            <div class="form-group">
              <?php echo Form::label('Image','Image Design:'); ?>

              <?php echo Form::file('image',['data-field-type' => 'bootstrap-file-filed','data-preview' => 'on','data-file-types' => 'image/jpeg,image/png,image/gif','data-btn-class' => 'btn-primary']); ?>

            </div>
          
            <div class="form-group">
              
                <button type="submit" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-save"></i></button>
              
            </div>

         
          <?php echo Form::close(); ?>


        </div>
      </div>

       <a class="btn btn-success btn-block" href="<?php echo e(route('admin.design.index')); ?>" data-toggle="tooltip" data-placement="bottom" title="Regresar"><i class="fa fa-arrow-left"></i></a>
      
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<script src="<?php echo e(asset('js/bootstrap_file_field.js')); ?>"></script>
<script src="<?php echo e(asset('js/parsley.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>