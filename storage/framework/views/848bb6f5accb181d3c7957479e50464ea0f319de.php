

<?php $__env->startSection('content'); ?>
<div class="account-layout border">
  <div class="account-hdr bg-primary text-white border">
    Job Application
  </div>
  <div class="account-bdy p-3">
  <p class="alert alert-primary">User named <span class="text-capitalize"> (<?php echo e($applicant->name); ?>)</span> applied for your listing on <?php echo e($application->created_at); ?></p>
    <div class="row">
      <div class="col-sm-12 col-md-12 mb-5">
        <div class="card">
          <div class="card-header">
            User Profile (Applicant)
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-3">
                <img src="<?php echo e(asset('images/user-profile.png')); ?>" class="img-fluid rounded-circle" alt="">
              </div>
              <div class="col-9">
                <h6 class="text-info text-capitalize"><?php echo e($applicant->name); ?></h6>
                <p class="my-2"><i class="fas fa-envelope"></i> Email: <?php echo e($applicant->email); ?></p>
                <a href="mailto:<?php echo e($applicant->email); ?>" class="btn primary-btn" title="click to send email">Send user an email</a>
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
                <a href="<?php echo e(route('post.show',['job'=>$post])); ?>" class="secondary-link"><i class="fas fa-briefcase"></i> View job</a>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-end">
              <div class="small">
                <a href="<?php echo e(route('jobApplication.index')); ?>" class="btn primary-outline-btn">Go back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/job-application/show.blade.php ENDPATH**/ ?>