<nav class="navbar navbar-expand-md navbar-white bg-white border-bottom sticky-top" id="navbar">
  <div class="container">
  <a href="<?php echo e(URL('/')); ?>" class="navbar-brand">
      Job Portal
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <?php if(auth()->guard()->check()): ?>
        <li class="nav-item dropdown dropdown-left"> 
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(auth()->user()->name); ?></span> 
            <img class="img-profile rounded-circle" src="<?php echo e(asset('images/user-profile.png')); ?>" width="40px"> 
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> 
            <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
            <a class="dropdown-item" href="<?php echo e(route('account.dashboard')); ?>"> <i class="fas fa-cogs fa-sm "></i> Dashboard</a> 
            <?php endif; ?>
            <?php if(auth()->check() && auth()->user()->hasRole('author')): ?>
            <a class="dropdown-item" href="<?php echo e(route('account.authorSection')); ?>"> <i class="fa fa-cogs fa-sm "></i> Author Dashboard </a> 
            <?php endif; ?>
            <a class="dropdown-item" href="<?php echo e(route('account.index')); ?>"> <i class="fas fa-user fa-sm "></i> Profile </a> 
            <a class="dropdown-item" href="<?php echo e(route('account.changePassword')); ?>"> <i class="fas fa-key fa-sm "></i> Change Password </a> 
              <div class="dropdown-divider"></div> 
              <a class="dropdown-item" href="<?php echo e(route('account.logout')); ?>"> 
                <i class="fas fa-sign-out-alt"></i> 
                Logout 
              </a>
          </div>
        </li>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
        <a href="/login" class="btn primary-btn">Sign up or Log in</a>
        <?php endif; ?>
      </ul>
    </div>
  </div>
 
</nav><?php /**PATH D:\joblister-laravel-8\resources\views/inc/navbar.blade.php ENDPATH**/ ?>