<?php /* /Applications/XAMPP/xamppfiles/htdocs/larajob/resources/views/profile/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php if(empty(Auth::user()->profile->avatar)): ?>
            <img src="<?php echo e(asset('avatar/man.jpg')); ?>" width="100" style="width: 100%;">
            <?php else: ?>
            <img src="<?php echo e(asset('uploads/avatar')); ?>/<?php echo e(Auth::user()->profile->avatar); ?>" width="100" style="width: 100%;">

            <?php endif; ?>
            <br><br>

            <form action="<?php echo e(route('avatar')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>

            <div class="card">
                <div class="card-header">Update profile picture</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="avatar">
                    <br>
                    <button class="btn btn-success float-right" type="submit">Update</button>
                    <?php if($errors->has('avatar')): ?>
                            <div class="error" style="color: red;"><?php echo e($errors->first('avatar')); ?></div>
                        <?php endif; ?>

                </div>
            </div>
        </form>


        </div>

        <div class="col-md-5">
            <?php if(Session::has('message')): ?>
                 <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
             <div class="card">
                <div class="card-header">Update Your Profile</div>


                <form action="<?php echo e(route('profile.create')); ?>" method="POST"><?php echo csrf_field(); ?>


                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo e(Auth::user()->profile->address); ?>">
                        <?php if($errors->has('address')): ?>
                            <div class="error" style="color: red;"><?php echo e($errors->first('address')); ?></div>
                        <?php endif; ?>

                    </div>


                    <div class="form-group">
                        <label for="">Phone number</label>
                        <input type="text" class="form-control" name="phone_number" value="<?php echo e(Auth::user()->profile->phone_number); ?>">
                        <?php if($errors->has('phone_number')): ?>
                            <div class="error" style="color: red;"><?php echo e($errors->first('phone_number')); ?></div>
                        <?php endif; ?>
                    </div>


                    <div class="form-group">
                        <label for="">Experience</label>
                        <textarea name="experience" class="form-control"><?php echo e(Auth::user()->profile->experience); ?></textarea>
                        <?php if($errors->has('experience')): ?>
                            <div class="error" style="color: red;"><?php echo e($errors->first('experience')); ?></div>
                        <?php endif; ?>
                    </div>


                    <div class="form-group">
                        <label for="">Bio</label>
                        <textarea name="bio" class="form-control"><?php echo e(Auth::user()->profile->bio); ?></textarea>
                        <?php if($errors->has('bio')): ?>
                            <div class="error" style="color: red;"><?php echo e($errors->first('bio')); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>

                </div>
            </div>

            

        </div>


</form>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">About you</div>
                <div class="card-body">
                <p>Name:<?php echo e(Auth::user()->name); ?></p>
                <p>Email:<?php echo e(Auth::user()->email); ?></p>
                <p>Address:<?php echo e(Auth::user()->profile->address); ?></p>

                <p>Phone:<?php echo e(Auth::user()->profile->phone_number); ?></p>
                <p>Gender:<?php echo e(Auth::user()->profile->gender); ?></p>
                <p>Experience:<?php echo e(Auth::user()->profile->experience); ?></p>
                <p>Bio:<?php echo e(Auth::user()->profile->bio); ?></p>
                <p>Member On:<?php echo e(date('F d Y',strtotime(Auth::user()->created_at))); ?></p>

                <?php if(!empty(Auth::user()->profile->cover_letter)): ?>
                    <p><a href="<?php echo e(Storage::url(Auth::user()->profile->cover_letter)); ?>">Cover letter</a></p>
                <?php else: ?>
                    <p>Please upload cover letter</p>
                <?php endif; ?>


                <?php if(!empty(Auth::user()->profile->resume)): ?>
                    <p><a href="<?php echo e(Storage::url(Auth::user()->profile->resume)); ?>">Resume</a></p>
                <?php else: ?>
                    <p>Please upload resume</p>
                <?php endif; ?>



                </div>
            </div>
        <br>
        <form action="<?php echo e(route('cover.letter')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header">Update coverletter</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_letter"><br>
                    <button class="btn btn-success float-right" type="submit">Update</button>
                    <?php if($errors->has('cover_letter')): ?>
                            <div class="error" style="color: red;"><?php echo e($errors->first('cover_letter')); ?></div>
                        <?php endif; ?>
                </div>
            </div>
        </form>

            <br>
            <form action="<?php echo e(route('resume')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>

            <div class="card">
                <div class="card-header">Update resume</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="resume">
                    <br>
                    <button class="btn btn-success float-right" type="submit">Update</button>
                     <?php if($errors->has('resume')): ?>
                            <div class="error" style="color: red;"><?php echo e($errors->first('resume')); ?></div>
                        <?php endif; ?>
                </div>
            </div>
        </form>


        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>