

<?php $__env->startSection('content'); ?>
  <div class="account-layout  border">
    <div class="account-hdr bg-primary text-white border">
      Job Applications
    </div>
    <div class="account-bdy p-3">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <p class="mb-3 alert alert-primary">Listing all the Applicants who applied for your <strong>job listings</strong>.</p>
          <div class="table-responsive pt-3">
            <table class="table table-hover table-striped small">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Applicant Name</th>
                  <th>Email</th>
                  <th>Job Title</th>
                  <th>Applied on</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php if($applications && $applications->count()): ?>
                  <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>1</td>
                    <td><?php echo e($application->user->name); ?></td>
                    <td><a href="mailto:<?php echo e($application->user->email); ?>"><?php echo e($application->user->email); ?></a></td>
                    <td><a href="<?php echo e(route('post.show',['job'=>$application->post->id])); ?>"><?php echo e(substr($application->post->job_title,0,14)); ?>...</a></td>
                    <td><?php echo e($application->created_at); ?></td>
                    <td><a href="<?php echo e(route('jobApplication.show',['id'=>$application])); ?>" class="btn primary-outline-btn">View</a>
                      <form action="<?php echo e(route('jobApplication.destroy')); ?>" method="POST" class="d-inline-block">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="hidden" name="application_id" value="<?php echo e($application->id); ?>">
                        <button type="submit" class="btn danger-btn">Delete</button>
                      </form>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                  <tr>
                    <td>You haven't received any job applications.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-center mt-4 custom-pagination">
            <?php echo e($applications && $applications->links()); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/job-application/index.blade.php ENDPATH**/ ?>