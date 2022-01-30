<?php /* /Applications/XAMPP/xamppfiles/htdocs/larajob/resources/views/jobs/applicant.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> sd         
          <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="card">
                <div class="card-header"><?php echo e($applicant->title); ?></div>

                <div class="card-body">
                    <?php $__currentLoopData = $applicant->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
                        <table class="table" style="width: 100%;">
  <thead class="thead-dark">
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Name:<?php echo e($user->name); ?></td>
      <td>Email<?php echo e($user->email); ?></td>
      <td>Phone<?php echo e($user->profile->experience); ?></td>
      <td>Address<?php echo e($user->profile->address); ?></td>
      <td>Gender</td>
      <td>Resume:<a href="<?php echo e(Storage::url($user->profile->resume)); ?>">Resume</a></td>
    </tr>
    
  </tbody>
</table>

                   </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>