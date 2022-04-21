<?php $__env->startSection('mainContent'); ?>
  <form>
     <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" name="username">

  </div>

  <div class="form-group">
    <label>Phone Number</label>
    <input type="tel" class="form-control" name="usernumber">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\amount\resources\views/front/adduser.blade.php ENDPATH**/ ?>