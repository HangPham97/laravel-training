<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>

<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="sign-in-htm">
                    <div class="group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <label for="user" class="label">Email</label>
                        <input id="email" type="email" class="input" name="email" value="<?php echo e(old('email')); ?>" required
                               autofocus>

                        <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="group">
                        <label for="pass"
                               class="label <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">Password</label>
                        <input id="password" name="password" type="password" class="input" data-type="password">

                        <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" method="POST" action="<?php echo e(url('/register')); ?>">
                <div class="sign-up-htm">
                    <div class="group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <label for="user" class="label">Username</label>
                        <input type="text" class="input" name="name" value="<?php echo e(old('name')); ?>">

                        <?php if($errors->has('name')): ?>
                            <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                        <?php endif; ?>
                    </div>
                    <div class="group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <label class="col-md-4 label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="input" name="password">

                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                        <label class="col-md-4 label">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" class="input" name="password_confirmation">

                            <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <label class="col-md-4 label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="input" name="email" value="<?php echo e(old('email')); ?>">

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if(config('settings.reCaptchStatus')): ?>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <div class="g-recaptcha" data-sitekey="<?php echo e(config('settings.reCaptchSite')); ?>"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>