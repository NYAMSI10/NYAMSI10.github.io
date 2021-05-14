


<?php $__env->startSection('content'); ?>
  <div class ="col-sm-6">
  <form method = "post" action ="">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"  placeholder ="Enter name">
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" name="email" class="form-control"  placeholder ="Enter email">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control"  placeholder ="Enter address">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Restaurant\resources\views/add.blade.php ENDPATH**/ ?>