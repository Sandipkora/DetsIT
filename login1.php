<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETS-IT | Login</title>
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
                     <a href="login1.php" class="logo_text">
                     <img src="img/loginlogo.png" alt="DETS-IT" />
                        </a>
                    <div class="login_form">
                        <div class="login_form_inner">
                            <!-- <h3>Login to <span>your account</span></h3> -->
                            <ul class="login_tab">
                                <li><a class="active" href="login1.php"> Login</a></li>
                                <li><a href="register1.php"> Register</a></li>
                            </ul>
                            
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="email" name="signupEmail" class="input-text" placeholder="Email Address">
                                    <i class="fa fa-envelope"></i>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="signupPassword" class="input-text" placeholder="Password">
                                    <i class="fa fa-lock"></i>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="forgot-password.html">Forgot Password</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-md btn-theme btn-block">Login as Student</button>
                                </div>
                                <div class="form-group">
                                    <button style="background-color:rgba(4, 28, 66, 0.911) ;" type="submit" class="btn-md btn-theme btn-block">Login as Faculty</button>
                                </div>
                                <?php
                                        session_start();
                                    if(isset($_POST['signupEmail'])  && isset($_POST['signupPassword']))
                                    {   
                                        $link = mysqli_connect("localhost","root","","dets");
                                        $ssql = "select * from registered_students where email='".$_POST['signupEmail']."' and password='".$_POST['signupPassword']."'";
                                        $row = mysqli_query($link,$ssql);
                                        if(mysqli_num_rows($row) > 0){
                                            $arr = mysqli_fetch_assoc($row);
                                            // print_r($arr);
                                            // die;

                                            $_SESSION['sname'] = $arr['email'];
											$_SESSION['username'] = $arr['name'];
											
											// print_r($_SESSION['sname']);
                                            // die;
                                            echo"<script>window.location='index.php';</script>";
											
                                        }else{
                                            echo"<script>alert('Please check the email and password again and login');window.location='login1.php';</script>";
                                        }
                                    }
                                ?>

                            </form>
                        </div>
                        <!-- <div class="or_options text-center">
                            <div class="or_text"><span>Or Login With</span></div>
                            <ul class="social-list clearfix">
                                <li><a class="s_facebook" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a class="s_twitter" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a class="s_google" href="#"><i class="fa fa-google-plus"></i> Google</a></li>
                            </ul>
                        </div> -->
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

<!-- Mirrored from uiwebsoft.com/justlog/login-nine/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2022 08:22:04 GMT -->
</html>