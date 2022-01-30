<?php /* /Applications/XAMPP/xamppfiles/htdocs/larajob/resources/views/company/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="col-md-12">

        <div class="company-profile">
<?php if(empty($company->cover_photo)): ?>


   <img src="<?php echo e(asset('cover/tumblr-image-sizes-banner.png')); ?>" style="width:100%;">

   <?php else: ?>
<img src="<?php echo e(asset('uploads/coverphoto')); ?>/<?php echo e($company->cover_photo); ?>" style="width: 100%;">


   <?php endif; ?>


            <div class="company-desc">
<?php if(empty($company->logo)): ?>

<img width="100" src="<?php echo e(asset('avatar/man.jpg')); ?>">

   <?php else: ?>
<img width="100" src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e($company->logo); ?>">


   <?php endif; ?>


            <p><?php echo e($company->description); ?></p>
                <h1><?php echo e($company->cname); ?></h1>
                <p>Slogan-<?php echo e($company->slogan); ?>&nbsp;Address-<?php echo e($company->address); ?>&nbsp; Phone-<?php echo e($company->phone); ?>&nbsp; Website-<?php echo e($company->website); ?></p>

            </div>

        </div>

        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $company->jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php if(empty($company->logo)): ?>

                    <img width="100" src="<?php echo e(asset('avatar/man.jpg')); ?>">

                     <?php else: ?>
                        <img width="100" src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e($company->logo); ?>">


                <?php endif; ?>



                    </td>
                    <td>Position:<?php echo e($job->position); ?>

                        <br>
                        <i class="fa fa-clock-o"aria-hidden="true"></i>&nbsp;<?php echo e($job->type); ?>

                    </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address:<?php echo e($job->address); ?></td>
                    <td><i class="fa fa-globe"aria-hidden="true"></i>&nbsp;Date:<?php echo e($job->created_at->diffForHumans()); ?></td>
                    <td>
                        <a href="<?php echo e(route('jobs.show',[$job->id,$job->slug])); ?>">
                            <button class="btn btn-success btn-sm">     Apply
                            </button>
                        </a>
                        
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>