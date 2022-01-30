

<?php $__env->startSection('content'); ?>
<div class="account-layout border">
  <div class="account-hdr bg-primary text-white border">
    Apply for job
  </div>
  <div class="account-bdy p-3">
    <div class="row">
      <div class="col-sm-12 col-md-12 mb-5">
        <div class="card">
          <div class="card-header">
            My Profile
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-3">
                <img src="<?php echo e(asset('images/user-profile.png')); ?>" class="img-fluid rounded-circle" alt="">
              </div>
              <div class="col-9">
                <h6 class="text-info text-capitalize"><?php echo e(auth()->user()->name); ?></h6>
                <p class="my-2"><i class="fas fa-envelope"></i> Email: <?php echo e(auth()->user()->email); ?></p>
                <a href="<?php echo e(route('account.index')); ?>">View My profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12">
        <div class="card">
          <div class="card-header">
            Key Job Requirements
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-3 d-flex align-items-center border p-3">
                <img src="<?php echo e(asset($company->logo)); ?>" class="img-fluid" alt="">
              </div>
              <div class="col-9">
                <p class="h4 text-info text-capitalize">
                  <?php echo e($post->job_title); ?>

                </p>
                <h6 class="text-uppercase">
                  <a href="<?php echo e(route('account.employer',['employer'=>$company])); ?>"><?php echo e($company->title); ?></a>
                </h6>
                <p class="my-2"><i class="fas fa-map-marker-alt"></i> Location: <?php echo e($post->job_location); ?></p>
                <p class="text-danger small"><?php echo e(date('l, jS \of F Y',$post->deadlineTimestamp())); ?>, (<?php echo e(date('d',$post->remainingDays())); ?> days from now)</p>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-end">
              <div class="my-2">
                <a href="<?php echo e(route('post.show',['job'=>$post])); ?>" class="secondary-link"><i class="fas fa-briefcase"></i> View job</a>|
                <a href="<?php echo e(route('savedJob.store',['id'=>$post->id])); ?>" class="secondary-link"><i class="fas fa-share-square"></i> Save job</a>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-end">
              <div class="small">
                <a href="<?php echo e(URL::previous()); ?>" class="btn primary-outline-btn">Cancel</a>
                <form action="<?php echo e(route('account.applyJob')); ?>" method="POST" class="d-inline-block">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                  <button type="submit" class="btn primary-btn">Send Application <i class="fas fa-chevron-right"></i></a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/account/apply-job.blade.php ENDPATH**/ ?>