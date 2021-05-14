


<?php $__env->startSection('content'); ?>

<h1> register page is here </h1>

<form method="post" action="register">   
 <?php echo csrf_field(); ?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Entre nom">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control"  placeholder ="Enter email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder ="mot de passe">
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" name="contact" class="form-control" placeholder ="contact">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Registre</button>
</form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\Restaurant\resources\views/register.blade.php ENDPATH**/ ?>