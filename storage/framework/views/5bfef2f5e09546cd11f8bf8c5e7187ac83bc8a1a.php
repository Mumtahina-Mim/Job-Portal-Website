<div class="account-nav">
  <ul class="list-group">
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'dashboard' ? 'active': ''); ?>">
      <a href="<?php echo e(route('account.dashboard')); ?>" class="account-nav-link">
        <i class="fas fa-chart-line"></i> Dashboard
      </a>
    </li>
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'view-all-users' ? 'active': ''); ?>">
      <a href="<?php echo e(route('account.viewAllUsers')); ?>" class="account-nav-link">
        <i class="fas fa-users"></i> View All Users
      </a>
    </li>
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('author')): ?>
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'author-section' ? 'active': ''); ?>">
      <a href="<?php echo e(route('account.authorSection')); ?>" class="account-nav-link">
        <i class="fas fa-chart-line"></i> Author Section
    </li>
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'post' && request()->segment(3) == 'create' ? 'active': ''); ?>">
      <a href="<?php echo e(route('post.create')); ?>" class="account-nav-link">
        <i class="fas fa-plus-square"></i> Create Job listing
    </li>
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'job-application' ? 'active': ''); ?>">
      <a href="<?php echo e(route('jobApplication.index')); ?>" class="account-nav-link">
        <i class="fas fa-bell"></i> Job Applications
    </li>
    <?php endif; ?>
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'overview' ? 'active': ''); ?>">
      <a href="<?php echo e(route('account.index')); ?>" class="account-nav-link">
        <i class="fas fa-user-shield"></i> User Account
      </a>
    </li>
    <?php if(auth()->check() && auth()->user()->hasRole('user')): ?>
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'become-employer' ? 'active': ''); ?>">
      <a href="<?php echo e(route('account.becomeEmployer')); ?>" class="account-nav-link">
        <i class="fas fa-user-shield"></i> Become an employer
      </a>
    </li>
    <?php endif; ?>
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'change-password' ? 'active': ''); ?>">
      <a href="<?php echo e(route('account.changePassword')); ?>" class="account-nav-link">
        <i class="fas fa-fingerprint"></i> Change Password
      </a>
    </li>    
    <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'my-saved-jobs' ? 'active': ''); ?>">
      <a href="<?php echo e(route('savedJob.index')); ?>" class="account-nav-link">
        <i class="fas fa-stream"></i> My saved Jobs
      </a>
    </li>   
     <li class="list-group-item list-group-item-action <?php echo e(request()->segment(2) == 'deactivate' ? 'active': ''); ?>">
      <a href="<?php echo e(route('account.deactivate')); ?>" class="account-nav-link">
        <i class="fas fa-folder-minus"></i> Deactivate Account
      </a>
    </li>    
  </ul>
</div><?php /**PATH D:\joblister-laravel-8\resources\views/inc/account-nav.blade.php ENDPATH**/ ?>