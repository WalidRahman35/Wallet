<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Wallet</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('public/js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
    <style type="text/css">
         *{
   margin:0;
   padding:0;
   box-sizing: border-box;
 }
 body,html{
   height:100%;
   font-family: 'Poppins',sans-serif;
 }
 a{
  font-size:14px;
  line-height: 1.7;
  color:#fff;
  text-decoration: none;
  margin:0;
  transition:all 0.4s;
}
a:focus{
  outline:none;
}
input{
  outline:none;
  border:none;
}
input::-webkit-input-placeholder{
  color:#8f8fa1;
}
.container-login100{
  width:100%;
  min-height:100vh;
  display:flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding:15px;
  background-image:url(./images/bg-1.jpg);
  background-position:center;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  z-index:1;
}
.container-login100::before{
  content:'';
  display:block;
  position:absolute;
  z-index:-1;
  width:100%;
  height:100%;
  top:0;
  left:0;
  background-color: rgba(0,0,0,.6);
}
.wrap-login100{
  width:500px;
  background-color: rgba(255,255,255,0.2);
  border-radius: 10px;
  position: relative;
}
.login100-form{
  width:100%;
}
.login100-form-title{
  font-size:25px;
  color:#403866;
  line-height: 1.2;
  text-transform:uppercase;
  text-align: center;
  width:100%;
  display:block;
  margin-bottom:40px;
}
.login100-form-title i{
  font-size: 50px;
  color:#fff;
  border:1.5px solid #00b665;
  width:100px;
  border-radius: 100%;
  height:100px;
  line-height: 90px;
  transition:0.5s ease-in-out;
}
.login100-form-title i:hover{
  background-color: #fff;
  color:#00b665;
  border-color:#fff;
}
.wrap-input100{
  width:100%;
  position: relative;
  background-color: #e6e6e6;
  border:1px solid transparent;
  border-radius: 3px;
}
.input100{
  color:#403866;
  line-height: 1.2;
  font-size: 16px;
  display: block;
  width:100%;
  background-color: #f8f8f9;
  height:52px;
  padding:0px 20px 0px;
  border-radius: 6px;
}
.focus-input100{
  position: absolute;
  display:block;
  width:calc(100% + 2px);
  height:calc(100% + 2px);
  top:-1px;
  left:-1px;
  pointer-events: none;
  border:2px solid #00b665;
  border-radius: 3px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition:all 0.4s;
  transition:all 0.4s;
  -webkit-transform:scaleX(1.1) scaleY(1.3);
  transform:scaleX(1.1) scaleY(1.3);
}
.input100:focus + .focus-input100{
  visibility: visible;
  opacity: 1;
  -webkit-transform:scale(1);
  transform:scale(1);
}
.container-login100-form-btn{
  width:100%;
  display:flex;
  flex-wrap:wrap;
}
.login100-form-btn{
  font-size:16px;
  color:#fff;
  line-height: 1.2;
  text-transform: uppercase;
  display:flex;
  justify-content: center;
  align-items: center;
  padding:0 20px;
  width:100%;
  height:52px;
  cursor: pointer;
  background-color: #00b665;
  border-radius: 6px;
  transition:all 0.4s;
  -webkit-transition:all 0.4s;
}
.login100-form-btn:hover{
  background-color: #00b665;
}
.p-t-50{padding-top: 50px;}
.p-b-90{padding-bottom: 90px;}
.p-l-50{padding-left: 50px;}
.p-r-50{padding-right:50px;}
.m-t-17{margin-top:17px;}
.m-b-16{margin-bottom:16px;}

.w-full{
  width:100%;
}
.m-auto{
  margin:auto;
}

s
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm"  style="background: #8eeaff ;padding: 30px;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Wallet
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="margin:-0.5%;">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\wallet\resources\views/layouts/app.blade.php ENDPATH**/ ?>