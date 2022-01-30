<?php /* /Applications/XAMPP/xamppfiles/htdocs/larajob/resources/views/company/create.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">

<?php if(empty(Auth::user()->company->logo)): ?>

<img src="<?php echo e(asset('avatar/man.jpg')); ?>"style="width: 100%;">

   <?php else: ?>
<img src="<?php echo e(asset('uploads/logo')); ?>/<?php echo e(Auth::user()->company->logo); ?>" style="width: 100%;">


   <?php endif; ?>


            <br><br>
            


             <form action="<?php echo e(route('company.logo')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header">Update logo</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="company_logo"><br>
                    <button class="btn btn-dark float-right" type="submit">Update</button>
                </div>
            </div>
        </form>


        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Update Your Company Information</div>


                <form action="<?php echo e(route('company.store')); ?>" method="POST"><?php echo csrf_field(); ?>


                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo e(Auth::user()->company->address); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone"  value="<?php echo e(Auth::user()->company->phone); ?>" >
                    </div>
                    <div class="form-group">
                        <label for="">Website</label>
                        <input type="text" class="form-control" name="website"  value="<?php echo e(Auth::user()->company->website); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Slogan</label>
                        <input type="text" class="form-control" name="slogan"  value="<?php echo e(Auth::user()->company->slogan); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                            <textarea name="description" class="form-control"> <?php echo e(Auth::user()->company->description); ?></textarea>
                        </div>

                

                    <div class="form-group">
                        <button class="btn btn-dark" type="submit">Update</button>
                    </div>

                </div>
            </div>

            <?php if(Session::has('message')): ?>
                 <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>

        </div>


</form>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">About your company</div>
                <div class="card-body">

                    <p> name:<?php echo e(Auth::user()->company->cname); ?></p>

                    <p> address:<?php echo e(Auth::user()->company->address); ?></p>

                    <p> phone:<?php echo e(Auth::user()->company->phone); ?></p>

                    <p> website:<a href="<?php echo e(Auth::user()->company->website); ?>"> <?php echo e(Auth::user()->company->website); ?></a></p>

                    <p>Company slogan:<?php echo e(Auth::user()->company->website); ?></p>
                    <p>Company page:<a href="company/<?php echo e(Auth::user()->company->slug); ?>">View</a></p>
                    
                </div>
            </div>
        <br>
        <form action="<?php echo e(route('cover.photo')); ?>" method="POST" enctype="multipart/form-data"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header">Update coverletter</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_photo"><br>
                    <button class="btn btn-dark float-right" type="submit">Update</button>
                </div>
            </div>
        </form>



        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>