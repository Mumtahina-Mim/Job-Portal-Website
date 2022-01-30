
<?php $__env->startSection('content'); ?>
<div class="account-layout  border">
  <div class="account-hdr bg-primary text-white border">
   Become an employer in <?php echo e(config('app.name')); ?>

  </div>
  <div class="account-bdy p-3">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <p class="lead">Upgrade to Author Role</p>
      </div>
      <div class="col-sm-12 col-md-8">
        <div>
          <p class="text-sm"><i class="fas fa-info-circle"></i> <span class="font-weight-bold">Usually this should be validated by Admin but for testing it is one click away to become an employer.</span> </p>
          <div class="my-4">
          <p class="my-3">Click the button to assign <span class="text-primary">Author roles</span> to your account.</p>
            <form action="<?php echo e(route('account.becomeEmployer')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <div class="d-flex">
                  <button type="submit" class="btn primary-outline-btn">Become Employer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/account/become-employer.blade.php ENDPATH**/ ?>