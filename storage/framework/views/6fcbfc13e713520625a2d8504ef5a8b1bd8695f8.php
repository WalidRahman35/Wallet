<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css">
<div class="container-login100" style="background-image: url('image/bc.jpg');">
        <div class="wrap-login100 p-t-50 p-b-90 p-l-50 p-r-50" style="padding-top: -0.5rem !important">
            <form class="login100-form flex-sb flex-w" action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <span class="login100-form-title">
                    <a href="" target="_blank">
                        <i class="fas fa-user"></i>
                    </a>
                </span>
              
                <div class="wrap-input100 m-b-16">
                    <input class="input100" type="email" placeholder="Email" name="email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 m-b-16">
                    <input class="input100" type="password" placeholder="Password" name="password">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <div class="w-full beforeNone text-center">
                        <input type="submit" class=" login100-form-btn" name="submit">
                    </div>
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <a href="#">Forget Password?</a>
                </div>
            </form>
        </div>
    </div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wallet\resources\views/auth/login.blade.php ENDPATH**/ ?>