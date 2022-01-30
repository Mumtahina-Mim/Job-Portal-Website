<?php /* /Applications/XAMPP/xamppfiles/htdocs/larajob/resources/views/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php if(Auth::user()->user_type=='seeker'): ?>
            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-header"><?php echo e($job->title); ?></div>
                

                <div class="card-body">  
                    <small class="badge badge-success"><?php echo e($job->position); ?>

                </small>

                   <p> <?php echo e($job->description); ?></p>
                </div>
                <div class="card-footer">
                    <span><a href="<?php echo e(route('jobs.show',[$job->id,$job->slug])); ?>">Read</a></span>
                    <span class="float-right">Last date:<?php echo e($job->last_date); ?></span>
                </div>

            </div>
            <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            
            You're logged in 


            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>