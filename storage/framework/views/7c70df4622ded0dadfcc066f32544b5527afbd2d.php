<?php /* /Applications/XAMPP/xamppfiles/htdocs/larajob/resources/views/jobs/applicants.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Applicants</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">       
          <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="card">
                <div class="card-header"><a href="<?php echo e(route('jobs.show',[$applicant->id,$applicant->slug])); ?>"> <?php echo e($applicant->title); ?></a></div>

                <div class="card-body">
                    <?php $__currentLoopData = $applicant->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
            <table class="table" style="width: 100%;">
            <thead class="thead-dark">
            </thead>
            <tbody>
            <tr>
                <td>
                    <?php if($user->profile->avatar): ?>
                        <img src="<?php echo e(asset('uploads/avatar')); ?>/<?php echo e($user->profile->avatar); ?>" width="80">
                    <?php else: ?>
                    <img src="<?php echo e(asset('uploads/avatar/man.jpg')); ?>" width="80">
                    <?php endif; ?>

            <br>Applied on:<?php echo e(date('F d, Y', strtotime($applicant->created_at))); ?>

                </td>
              <td>Name:<?php echo e($user->name); ?></td>
      <td>Email<?php echo e($user->email); ?></td>
      <td>Address:<?php echo e($user->profile->address); ?></td>
      <td>Gender<?php echo e($user->profile->gender); ?></td>
      <td>Experience:<?php echo e($user->profile->experience); ?></td>
      <td>Bio:<?php echo e($user->profile->bio); ?></td>
      <td>Phone:<?php echo e($user->profile->phone_number); ?></td>

      <td><a href="<?php echo e(Storage::url($user->profile->resume)); ?>">Resume</a></td>

      <td><a href="<?php echo e(Storage::url($user->profile->cover_letter)); ?>">Cover letter</a></td>
      <td></td>

    </tr>
    
  </tbody>
</table>

                   </div><br><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> 
                <br>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>