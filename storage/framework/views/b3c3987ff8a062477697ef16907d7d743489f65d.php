

<?php $__env->startSection('content'); ?>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-container">
                <div class="login-header mb-3">
                    <h3> <img src="<?php echo e(asset('images/logo/joblister.png')); ?>" width="50px;" alt=""> Joblister Login</h3>
                    <p class="login-header-title">Welcome back to Job lister</p>
                    <p class="text-muted">login with your registered email & password.</p>
                </div>
                <div class="login-form">
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                </div>
                            <input id="email" type="email" placeholder="E-mail address" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                            <?php $__errorArgs = ['email'];
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
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                            <input id="password" type="password" placeholder="Password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" value="<?php echo e(old('password')); ?>" required>
                            <?php $__errorArgs = ['password'];
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
                        <div class="form-group mb-0">
                            <input type="checkbox" id="rememberMe" name="remember" <?php echo e(old('remember')?'checked':''); ?>>
                            <label for="rememberMe">Remember me</label>
                        </div>
                        <div class="form-group">
                            <a href="#" class="secondary-link">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn primary-btn btn-block">Login</button>
                    </form>
                    <div class="my-3">
                        <p>Don't have an account? <a href="/register">Register now</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-poster">
                
                <h2 class="mb-3 slogon">Mark yourself as <br>Actively Job seeker</h2>
                <p class="text-white lead">We have enabled this feature targeting superheros
                    who lost their jobs during this crisis.</p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
.login-poster {
   background-image: url('<?php echo e(asset("images/login-bg.jpg")); ?>');
    background-image: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.35)
        ),
        url('<?php echo e(asset("images/login-bg.jpg")); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\joblister-laravel-8\resources\views/auth/login.blade.php ENDPATH**/ ?>