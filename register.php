

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
		<title>DETS-IT SignUP</title>
		

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Main CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form method="post" enctype='multipart/form-data'>
				<div class="row justify-content-md-center">
					<div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/loginlogo.png" alt="DETS-IT" />
								</a>
								<h5>Welcome,<br />Create your Account.</h5>

						<?php
							if(isset($_POST['signupName']) && isset($_POST['signupPhone']) && isset($_POST['signupEmail']))
								{	
									$image= $_FILES['image']['name'];
									$image_temp= $_FILES['image']['tmp_name'];
									$path= 'img/'.$image;
									$link = mysqli_connect("localhost","root","","dets");
									move_uploaded_file($image_temp,$path);
									$msql = "INSERT INTO registered_students(name,phone,email,image,password,batch,stream,rollno,regno,dob,street,city,state,pin)
									 values ('".$_POST['signupName']."','".$_POST['signupPhone']."','".$_POST['signupEmail']."','".$image."','".$_POST['signupPassword']."','".$_POST['batch']."','".$_POST['stream']."','".$_POST['roll']."','".$_POST['reg']."','".$_POST['dob']."','".$_POST['street']."','".$_POST['city']."','".$_POST['state']."','".$_POST['pin']."')";
									$result = mysqli_query($link,$msql);
									$id = mysqli_insert_id($link); 
									if($id>0)
									{
										
										echo"<script>window.location='index.php';</script>";
									}
								}
						?>
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" name="signupName" placeholder="Full Name" />
										<input type="tel" class="form-control" name="signupPhone" placeholder="Contact No.">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name = "signupEmail" placeholder="Email Address" />
                                    <label>Date Of Birth</label>
                                    <input type="date" class="form-control" name = "dob" placeholder="DOB" />
								</div>
								<div class="form-group">
									<label>Select Image</label>
									<input type="file" class="form-control" name="image" placeholder="Upload Image" />
								</div>
                                <div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" name="street" placeholder="Street" />
										<input type="text" class="form-control" name="city" placeholder="City">
                                        <input type="text" class="form-control" name="state" placeholder="State">
                                        
									</div>
								</div>
                                <div class="form-group">
									<div class="input-group">
                                        <input type="text" class="form-control" name="pin" placeholder="PIN Code">
										<input type="text" class="form-control" name="roll" placeholder="Your Roll No." />
										<input type="text" class="form-control" name="reg" placeholder="Registration No..">
									</div>
								</div>
                                <div class="form-group">
                                    <div class="input-group">
										<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Stream</label>
										<select class="custom-select my-1 mr-sm-2" name="stream" id="inlineFormCustomSelectPref">
											<option selected>Choose...</option>
											<option value="IT">IT</option>
											<option value="EIE">EIE</option>
											<option value="ECE">ECE</option>
											<option value="CSE">CSE</option>
										</select>
					
											<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Batch</label>
											<select class="custom-select my-1 mr-sm-2" name="batch" id="inlineFormCustomSelectPref">
												<option selected>Choose...</option>
												<option value="B.Tech Part-I">B.Tech Part-I</option>
												<option value="B.Tech Part-II">B.Tech Part-II</option>
												<option value="B.Tech Part-III">B.Tech Part-III</option>
												<option value="B.Tech Part-IV">B.Tech Part-IV</option>
											</select>
                                        </div>
                                </div>
								<div class="form-group">
									<div class="input-group">
										<input type="password" class="form-control" name="signupPassword" placeholder="Password" />
										<input type="password" class="form-control" placeholder="Conform Password">
									</div>
									<small id="passwordHelpInline" class="text-muted">
										Password must be 8-20 characters long.
									</small>
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
										<label class="custom-control-label" for="remember_pwd">Remember me</label>
									</div>
									<button type="submit" class="btn btn-primary">Signup</button>
								</div>
								<hr>
								<div class="m-0">
									<span class="additional-link">Have an account? <a href="login.php" class="btn btn-secondary">Login</a></span>
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