
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wallet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center"style="background: #8eeaff;" >
  <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
  <a href="<?php echo e(url('/')); ?>" type="submit" class="btn btn-primary">home</a>
  <h1>Wallet</h1>
  
     <a href="#"  class="btn btn-primary">৳ <?php echo e($user->useramount); ?></a>
</div>
  
<div class="container">

 <h1>Money Transfer</h1>
<form id="basic-form-wizard" action="<?php echo e(url('/send')); ?>" method="post">
                                            <?php echo e(csrf_field()); ?>


  <div class="form-group">
    <label>Amount</label>
    <input type="number" class="form-control" name="useramount">
  </div>
 <div class="form-group">
    <label>Acount Email</label>
    <input type="email" class="form-control" name="ac_email">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\wallet\resources\views/front/home/homeContent.blade.php ENDPATH**/ ?>