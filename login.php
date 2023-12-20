
<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>DETS-IT Login</title>
		
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form method="post" enctype="multipart/form-data">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/loginlogo.png" alt="DETS-IT" />
								</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="text" class="form-control" name="signupEmail" placeholder="Email Address" />
								</div>
								<div class="form-group">
									<input type="password" class="form-control"  name="signupPassword" placeholder="Password" />
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
										<label class="custom-control-label" for="remember_pwd">Remember me</label>
									</div>
									<button type="submit" class="btn btn-primary" value="login">Login</button>
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
                                            echo"<script>alert('Please check the email and password again and login');window.location='login.php';</script>";
                                        }
                                    }
                                ?>


								<div class="forgot-pwd">
									<a class="link" href="forgot-pwd.html">Forgot password?</a>
								</div>
								<hr>
								<div class="actions align-left">
									<span class="additional-link">New here?</span>
									<a href="register.php" class="btn btn-secondary">Create an Account</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>
</html>