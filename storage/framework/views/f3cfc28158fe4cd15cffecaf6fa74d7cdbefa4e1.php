

<?php $__env->startSection('content'); ?>
  <section class="home-page pt-4">
    <div class="container">
      <form action="<?php echo e(route('job.index')); ?>">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="px-4">
              <div class="rounded-text">
                <p>
                  Find jobs, vacancy, career online.
                </p>
              </div>
              <div class="home-search-bar">
                  <input type="text" name="q" placeholder="Search Job By Title" class="home-search-input form-control">
                  <button type="submit" class="secondary-btn"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="py-5 px-5 text-center">
              <div class="text-light">
                <h4>A dream doesn't become reality through magic, it takes sweat, determination and hard work.
              </h4>
              </div>
            </div>
            </div>
        </div>   
      </form>
    </div>
  </section>
  
  
  <section class="jobs-section py-5">
    <div class="container-fluid px-0">
      <div class="row ">
        <div class="col-sm-12 col-md-7 ml-auto">
          <div class="card">
            <div class="card-header">
              <p class="card-title font-weight-bold"><i class="fas fa-briefcase"></i> Top jobs</p>
            </div>
            <div class="card-body">
              <div class="top-jobs" >
                <div class="row">

                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($post->company): ?>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-sm-6 mb-sm-3">
                      <a href="<?php echo e(route('post.show',['job'=>$post->id])); ?>">
                      <div class="job-item border row h-100">
                        <div class="col-xs-3 col-sm-4 col-md-5">
                          <img src="<?php echo e(asset($post->company->logo)); ?>" alt="job listings" class="img-fluid p-2">
                        </div>
                        <div class="job-description col-xs-9 col-sm-8 col-md-7">
                        <p class="company-name" title="<?php echo e($post->company->title); ?>"><?php echo e($post->company->title); ?></p>
                          <ul class="company-listings">
                            <li>•<?php echo e(substr($post->job_title, 0, 27)); ?></li>
                        </ul>
                        </div>
                      </div>
                      </a>
                    </div>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 </div>
               </div>
              </div>
              <a class="btn secondary-btn" href="<?php echo e(route('job.index')); ?>">Show all jobs</a>
            </div>
          </div>
       
        <div class="col-sm-12 col-md-3 mr-auto">

          <div class="card mb-4">
            <div class="card-header">
              <p class="font-weight-bold"><i class="fas fa-building"></i> Top Employers</p>
            </div>
            <div class="card-body">
              <div class="top-employers">
              <?php $__currentLoopData = $topEmployers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="top-employer">
                  <a href="<?php echo e(route('account.employer',['employer'=>$employer])); ?>">
                    <img src="<?php echo e(asset($employer->logo)); ?>" width="60px" class="img-fluid" alt="">
                  </a>
                </div> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>

            <div class="card mb-4 job-by-category">
              <div class="card-header">
                <p class="font-weight-bold"><i class="fab fa-typo3"></i> Jobs By Category</p>
              </div>
              <div class="card-body">
                <div class="jobs-category mb-3 mt-0">
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="hover-shadow p-1"><a href="<?php echo e(URL::to('search?category_id='.$category->id)); ?>" class="text-muted"><?php echo e($category->category_name); ?></a> </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <a class="p-1 text-info" href="<?php echo e(route('job.index')); ?>">More..</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/home.blade.php ENDPATH**/ ?>