

<?php $__env->startSection('content'); ?>
  <div class="account-layout border">
    <div class="account-hdr bg-primary text-white border">
      Create Job listings
    </div>
    <div class="account-bdy p-3">
      <div class="alert alert-primary">Your company details will be attached automatically.</div>
      <p class="text-primary mb-4">Fill in all fields to create a job listing</p>
      <div class="row mb-3">
        <div class="col-sm-12 col-md-12">
          <form action="<?php echo e(route('post.store')); ?>" id="postForm" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="">Job title</label>
              <input type="text" placeholder="Job title" class="form-control <?php $__errorArgs = ['job_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="job_title" value="<?php echo e(old('job_title')); ?>" required autofocus >
              <?php $__errorArgs = ['job_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Job level</label>
                  <select name="job_level" class="form-control" value="<?php echo e(old('job_level')); ?>" required>
                    <option value="Senior level">Senior level</option>
                    <option value="Mid level">Mid level</option>
                    <option value="Top level">Top level</option>
                    <option value="Entry level">Entry level</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="">No of vacancy</label>
                  <input type="number" class="form-control <?php $__errorArgs = ['vacancy_count'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="vacancy_count" value="<?php echo e(old('vacancy_count')); ?>" required >
                  <?php $__errorArgs = ['vacancy_count'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
            </div>
       

            <div class="form-group">
              <label for="">Employment Type</label>
              <select name="employment_type" class="form-control" name="employment_type" value="<?php echo e(old('employment_type')); ?>">
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Freelance">Freelance</option>
                <option value="Internship">Internship</option>
                <option value="Trainneship">Trainneship</option>
                <option value="Volunter">Volunter</option>
              </select>
            </div>

            <div class="form-group">
              <label for="">Job location</label>
              <input type="text" placeholder="Job location" class="form-control <?php $__errorArgs = ['job_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="job_location" value="<?php echo e(old('job_location')); ?>" required >
              <?php $__errorArgs = ['job_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Offered Salary (Monthly)</label>
                  <input type="text" placeholder="20k - 50k" class="form-control <?php $__errorArgs = ['salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="salary" value="<?php echo e(old('salary')); ?>" required >
                  <?php $__errorArgs = ['salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-6">
                  <label for="">Deadline</label>
                  <input type="date" class="form-control <?php $__errorArgs = ['deadline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="deadline" value="<?php echo e(old('deadline')); ?>" required >
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Education level</label>
                  <select name="education_level" class="form-control" value="<?php echo e(old('education_level')); ?>">
                    <option value="Bachelors">Bachelors</option>
                    <option value="High School">High School</option>
                    <option value="Master">Master</option>
                    <option value="SEE Mid School">SEE Mid School</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="">Experience</label>
                  <select name="experience" class="form-control" value="<?php echo e(old('experience')); ?>">
                    <option value="Internship">Less than 1 year</option>
                    <option value="1 year">1 year</option>
                    <option value="2 years">2 years</option>
                    <option value="2 years">3 years</option>
                    <option value="More than 5+ year">More than 5+ year</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="">Professional skills <span class="text-info">( If multiple separate with "," )</span></label>
              <input type="text" placeholder="Skill1,Skill2 etc" class="form-control <?php $__errorArgs = ['skills'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="skills" value="<?php echo e(old('skills')); ?>" required >
            </div>

            <div class="form-group">
              <label for="">Job Description (Specifications) <small>Optional Field</small></label>
              <input type="hidden" id="specifications" name="specifications" value="<?php echo e(old('specifications')); ?>">
              <div id="quillEditor" style="height:200px"></div>
            </div>

            <button type="button" id="postBtn" class="btn primary-btn">Create Job listing</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
  $(document).ready(function(){
    var quill = new Quill('#quillEditor', {
    modules: {
      toolbar: [
          [{ 'font': [] }, { 'size': [] }],
          ['bold', 'italic'],
          [{ list: 'ordered' }, { list: 'bullet' }],
          ['link', 'blockquote', 'code-block', 'image'],
        ]
      },
    placeholder: 'Job Reqirement , Job Specifications etc ...',
    theme: 'snow'
    });
    

    const postBtn = document.querySelector('#postBtn');
    const postForm = document.querySelector('#postForm');
    const specifications = document.querySelector('#specifications');
    
    if(specifications.value){
      quill.root.innerHTML = specifications.value;
    }

    postBtn.addEventListener('click',function(e){
      e.preventDefault();
      specifications.value = quill.root.innerHTML
      
      postForm.submit();
    })
  })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/post/create.blade.php ENDPATH**/ ?>