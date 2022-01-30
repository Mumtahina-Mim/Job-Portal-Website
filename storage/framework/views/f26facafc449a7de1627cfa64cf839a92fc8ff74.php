

<?php $__env->startSection('content'); ?>
<section class="show-page pt-4 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <div class="job-listing border">
          <div class="company-info">
            <div class="company-banner">
              <div class="banner-overlay"></div>
              <?php if($company->cover_img == 'nocover'): ?>
              <img src="<?php echo e(asset('images/companies/nocover.jpg')); ?>" class="company-banner-img img-fluid" alt="">
              <?php else: ?>
              <img src="<?php echo e(asset($company->cover_img)); ?>" class="company-banner-img img-fluid" alt="">
              <?php endif; ?>
              <div class="company-media">
                <img src="<?php echo e(asset($company->logo)); ?>" alt="" class="company-logo">
                <div>
                  <a href="<?php echo e(route('account.employer',['employer'=>$company])); ?>" class="secondary-link">
                    <p class="font-weight-bold"><?php echo e($company->title); ?></p>
                    <p class="company-category"><?php echo e($company->getCategory->category_name); ?></p>
                  </a>
                </div>
              </div>
              <div class="company-website">
                <a href="<?php echo e($company->website); ?>" target="_blank"><i class="fas fa-globe"></i></a>
              </div>
            </div>

            
            <div class="p-3">
              <p><?php echo e($company->description); ?></p>
            </div>
          </div>

          
          <div class="job-info">
            <div class="job-hdr p-3">
              <p class="job-title"><?php echo e($post->job_title); ?></p>
              <div class="">
                <p class="job-views">
                  <span class="text-success">Views: <?php echo e($post->views); ?> </span> |
                  <span class="text-danger">Apply Before: <?php echo e(date('d',$post->remainingDays())); ?> days</span>
                </p>
              </div>
            </div>
            <div class="job-bdy p-3 my-3">
              <div class="job-level-description">
                <p class="font-weight-bold">Basic job level description</p>
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td width="33%">Job Category</td>
                      <td width="3%">:</td>
                      <td width="64%"><a href="/jobs"><?php echo e($company->getCategory->category_name); ?></a></td>
                    </tr>
                    <tr>
                      <td width="33%">Job Level</td>
                      <td width="3%">:</td>
                      <td width="64%"><?php echo e($post->job_level); ?></td>
                    </tr>
                    <tr>
                      <td width="33%">No of vacancy[s]</td>
                      <td width="3%">:</td>
                      <td width="64%">[ <strong><?php echo e($post->vacancy_count); ?></strong> ]</td>
                    </tr>
                    <tr>
                      <td width="33%">Employment type</td>
                      <td width="3%">:</td>
                      <td width="64%"><?php echo e($post->employment_type); ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Offered Salary(Monthly)</td>
                      <td width="3%">:</td>
                      <td width="64%"><?php echo e($post->salary); ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Apply before(Deadline)</td>
                      <td width="3%">:</td>
                      <td width="64%" class="text-danger"><?php echo e(date('l, jS \of F Y',$post->deadlineTimestamp())); ?>, (<?php echo e(date('d',$post->remainingDays())); ?> days from now)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="job-level-description">
                <p class="font-weight-bold">Job Specification</p>
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td width="33%">Education level</td>
                      <td width="3%">:</td>
                      <td width="64%"><a href="/jobs"> <?php echo e($post->education_level); ?></a></td>
                    </tr>
                    <tr>
                      <td width="33%">Experience Required</td>
                      <td width="3%">:</td>
                      <td width="64%"><?php echo e($post->experience); ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Professional Skill Required</td>
                      <td width="3%">:</td>
                      <td width="64%">
                        <?php $__currentLoopData = $post->getSkills(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge badge-primary"><?php echo e($skill); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="job-level-description">
                
                <p class="py-2"><?php echo $post->specifications; ?></p>
              </div>
              <br>
              <hr>
              <div class="d-flex justify-content-between">
                <div>
                  <a href="<?php echo e(route('account.applyJob',['post_id'=>$post])); ?>" class="btn primary-btn">Apply now</a>
                  <a href="<?php echo e(route('savedJob.store',['id'=>$post])); ?>" class="btn primary-outline-btn"><i class="fas fa-star"></i> Save job</a>
                </div>
                <div class="social-links">
                  <a href="https://www.facebook.com"  target="_blank" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
                  <a href="https://www.twitter.com" target="_blank"  class="btn btn-primary"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.linkedin.com"  target="_blank" class="btn btn-primary"><i class="fab fa-linkedin"></i></a>
                  <a href="https://www.gmail.com" target="_blank"  class="btn btn-primary"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="card d-none d-md-block mb-3">
          <div class="card-header">
            Job Action
          </div>
          <div class="card-body">
            <div class="btn-group w-100">
              <a href="<?php echo e(route('account.applyJob',['post_id'=>$post->id])); ?>" class="btn primary-outline-btn float-left">Apply Now</a>
              <a href="<?php echo e(route('savedJob.store',['id'=>$post->id])); ?>" class="btn primary-btn"><i class="fas fa-star"></i> Save job</a>
            </div>
          </div>
        </div>
        <div class="card ">
          <div class="card-header">
            Similar Jobs
          </div>
          <div class="card-body">
            <div class="similar-jobs">
              <?php $__currentLoopData = $similarJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($similarJobs): ?>
                <div class="job-item border-bottom row">
                  <div class="col-4">
                    <img src="<?php echo e(asset($job->company->logo)); ?>" class="company-logo" alt="">
                  </div>
                  <div class="job-desc col-8">
                    <a href="<?php echo e(route('post.show',['job'=>$post])); ?>" class="job-category text-muted font-weight-bold">
                      <p class="text-muted h6"><?php echo e($job->job_title); ?></p>
                      <p class="small"><?php echo e($job->company->title); ?></p>
                      <p class="font-weight-normal small text-danger">Deadline: <?php echo e(date('d',$job->remainingDays())); ?> days</p>
                    </a>
                  </div>
                </div>
                <?php else: ?>
                <div class="card">
                  <div class="card-header">
                    <p>No similar jobs</p>
                  </div>
                </div>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
  .company-banner {
    min-height: 20vh;
    position: relative;
    overflow: hidden;
  }

  .company-banner-img {
    width: 100%;
    height: auto;
    overflow: hidden;
  }

  .banner-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, .3));
    width: 100%;
    height: 200px;
  }

  .company-website {
    position: absolute;
    right: 20px;
    bottom: 20px;
    color: white;
  }

  .company-media {
    position: absolute;
    display: flex;
    align-items: center;
    left: 2rem;
    bottom: 1rem;
    color: #333;
    padding-right: 2rem;
    background-color:rgba(255,255,255,.8);
  }

  .company-logo {
    max-width: 100px;
    height: auto;
    margin-right: 1rem;
    padding: 1rem;
    background-color: white;
  }

  .company-category {
    font-size: 1.3rem;
  }

  .company-link:hover {
    color: #ddd;
  }

  .job-title {
    font-size: 1.3rem;
    font-weight: bold;
  }

  .job-hdr {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(to right, #e1edf7, #EDF2F7)
  }

  .job-item{
    margin-bottom: .5rem;
    padding:.5rem 0;
  }
  .job-item:hover {
    background-color:#eee;
  } 

</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/post/show.blade.php ENDPATH**/ ?>