

<?php $__env->startSection('layout-holder'); ?>
    
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container my-4">
        <div class="account-layout">
            <div class="account-hdr border">
                <h5><i class="fas fa-cog"></i> Account Settings</h5>
            </div>
            <div class="account-bdy">
                <div class="row">
                    <div class="col-sm-12 col-md-3 pr-md-0 pr-sm-3">
                        
                        <?php echo $__env->make('inc.account-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col-sm-12 col-md-9 pl-md-0 pl-sm-3 ">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/layouts/account.blade.php ENDPATH**/ ?>