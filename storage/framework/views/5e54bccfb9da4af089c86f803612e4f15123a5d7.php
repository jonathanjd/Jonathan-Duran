<div class="profile">
  <div class="profile_pic">
    <img src="<?php echo e(asset('template-admin/img/admin.jpg')); ?>" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Bienvenido,</span>
    <h2><?php echo e(Auth::user()->name); ?></h2>
  </div>
</div>
