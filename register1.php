<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETS-IT | Register</title>
    <!-- External CSS -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
 
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/login-nine.css">

</head>
<body>

<!-- Loader -->
<div class="loader"><div class="loader_div"></div></div>

<!-- Login page -->
<div class="login_wrapper">
    <div class="row no-gutters">

        <div class="col-md-6 mobile-hidden">
            <div class="login_left">
                <div class="login_left_img"><img src="images/login-bg.jpg" alt="login background"></div>
            </div>
        </div>
        <div class="col-md-6 bg-white">
            <div class="login_box">
                     <a href="#" class="logo_text">
                            <img src="img/loginlogo.png" alt="DETS-IT" />
                        </a>
                    <div class="login_form">
                        <div class="login_form_inner">
                            <!-- <h3>Login to <span>your account</span></h3> -->
                            <ul class="login_tab">
                                <li><a href="login1.php"> Login</a></li>
                                <li><a class="active" href="register1.php"> Register</a></li>
                            </ul>
                            
                            <form action="http://uiwebsoft.com/justlog/index.html" method="GET">
                                <div class="form-group">
                                    <input type="text" name="FullName" class="input-text" placeholder="Full Name">
                                    <i class="fa fa-user"></i>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="Password" class="input-text" placeholder="Password">
                                    <i class="fa fa-lock"></i>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address">
                                    <i class="fa fa-envelope"></i>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="checkbox clearfix">
                                    <div class="form-check checkbox-input">
                                        <input class="form-check-input" type="checkbox" value="" id="termServices">
                                        <label class="form-check-label" for="termServices">
                                            I agree to the terms of service
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-md btn-theme btn-block">Register</button>
                                </div>
                            </form>
                        </div>
                        <div class="or_options text-center">
                            <div class="or_text"><span>Or Register With</span></div>
                            <ul class="social-list clearfix">
                                <li><a class="s_facebook" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a class="s_twitter" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a class="s_google" href="#"><i class="fa fa-google-plus"></i> Google</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>
<!-- /. Login page -->



<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");;
    });
</script>

</body>

<!-- Mirrored from uiwebsoft.com/justlog/login-nine/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 08:22:32 GMT -->
</html>