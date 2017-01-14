<?php if(count($errors) > 0): ?>
<div class="alert alert-dismissible alert-danger">
  <ul>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php foreach($errors->all() as $error): ?>
  <li>
   <?php echo e($error); ?>

  </li>
<?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>
