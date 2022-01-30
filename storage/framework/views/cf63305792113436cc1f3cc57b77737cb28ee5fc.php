

<?php $__env->startSection('content'); ?>
  <div class="account-layout border">
    <div class="account-hdr border bg-primary text-white shadow">
      My saved Jobs
    </div>
    <div class="account-bdy p-3">
      <div class="my-2">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="bg-light small">
              <tr>
                <th>Job Position</th>
                <th>Job Level</th>
                <th>Company</th>
                <th>No of vacancy</th>
                <th>Apply Before</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($posts->count() >0): ?>
                <tr>
                  <td><a href="<?php echo e(route('post.show',['job'=>$post])); ?>"><?php echo e($post->job_title); ?></a></td>
                  <td><a href="#"><?php echo e($post->job_level); ?></a></td>
                  <td><a href="<?php echo e(route('account.employer',['employer'=>$post->company])); ?>"><?php echo e(substr($post->company->title,0,14)); ?>..</a></td>
                  <td><?php echo e($post->vacancy_count); ?></td>
                  <td><?php echo e(date('d/m/Y',$post->deadlineTimestamp())); ?>, <?php echo e(date('d',$post->remainingDays())); ?> days</td>
                  <td><form action="<?php echo e(route('savedJob.destroy',['id'=>$post])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("delete"); ?>
                    <button type="submit" href="#" class="btn secondary-outline-btn">Unsave</button>
                  </form></td>
                </tr>
                <?php else: ?>
                <tr>
                  <td>You have no jobs saved.</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/account/saved-job.blade.php ENDPATH**/ ?>