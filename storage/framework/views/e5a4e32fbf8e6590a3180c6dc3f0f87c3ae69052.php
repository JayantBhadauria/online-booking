<!DOCTYPE html>
<html>

<head>
    <?php echo $__env->make('includes.head',['title'=>'Welcome'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="/css/welcome.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body >

<div class="containerhome">
    <div class="form" style="background-color: red">

        <ul class="tab-group">
            <li class="tab active login"><a href="#login">Log In</a></li>
            <li class="tab signup"><a href="#signup">Sign Up</a></li>
        </ul>
        <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="tab-content" >
            <div id="login">
                <form action="<?php echo e(route('login')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="email" autocomplete="off" required>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" autocomplete="off" required>
                    </div>

                    <p class="forgot"><a href="#">Forgot Password?</a></p>

                    <button class="button button-block btn btn-danger" type="submit">Log In</button>

                </form>

            </div>

            <div id="signup">
                <h1>Create Account</h1>
                <form action="<?php echo e(route('register')); ?>" method="post" id="sign-up-form">
                    <?php echo e(csrf_field()); ?>

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name<span class="req">*</span>
                            </label>
                            <input type="text" name="first_name" autocomplete="off" required>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name<span class="req">*</span>
                            </label>
                            <input type="text" name="last_name" required="" autocomplete="off">
                        </div>
                    </div>

                    <div class="top-row">

                    <div class="field-wrap">
                        <label>
                            Phone Number<span class="req">*</span>
                        </label>
                        <input type="tel"  name="phone" required="" autocomplete="off">
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="email" required="" autocomplete="off">
                    </div>
                    </div>

                    <div class="top-row">

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" required="" autocomplete="off">
                    </div>

                    <div class="field-wrap">
                        <label>
                            Confirm Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password_confirmation" required="" autocomplete="off">
                    </div>
                    </div>

                    <button type="submit" class="button button-block">Get Started</button>

                </form>
            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src="/js/index.js"></script>

</div>

</body>

</html>