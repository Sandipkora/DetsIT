<?php

include "menu.php";


?>


<!doctype html>
<html lang="en">


<body>

	<!-- Page wrapper start -->
	<div class="page-wrapper">
		<!-- Page content start  -->
		<div class="page-content">

			<!-- Main container start -->
			<div class="main-container">
				<!-- Header end -->

				<!-- Page header start -->
				<div class="page-header" style="margin-top:0;height:300px" data-background="img/userpack.jpg">

					<!-- Breadcrumb start -->
					<ol class="breadcrumb" >
						<li class="breadcrumb-item">Account Settings</li>
					</ol>

				</div>
<!--
                <div class="header1" style="background-color:#1d1a39;margin-top:5px;height:200px">
                    <h1>USER PROFILE</h1>
                    
                </div>
-->
				<!-- Page header end -->

				<!-- Row start -->
				<?php
// $link = mysqli_connect("localhost","root","","dets");
//  $asql = "select * from registered_students where email='".$_SESSION['sname']."'";
// $result= mysqli_query($link,$asql);
// $data = mysqli_fetch_assoc($result);
?>
<?php
if(!empty($_GET['status']) && $_GET['status']=='1') { ?> -->
<div class="alert alert-success alert-dismissible fade show" role="alert">
										<i class="icon-check_circle"></i> Record has been updated successfully!!. <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<?php } ?>

				<form method="post" enctype="multipart/form-data" style="margin-top:0px;padding:20px;background-color:#2d2673">

				<!-- <input type="hidden" name="userid" value="<?php echo $data['sid'] ?>"> -->
					<div class="row gutters">
						
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<h6 class="mb-3 text-primary">Schedule Meeting</h6>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											
												<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Meeting Type</label>
												<select required class="custom-select my-1 mr-sm-2" name="mtype" id="inlineFormCustomSelectPref">
													<option value="">Select...</option>
													<option value="IT">Exam</option>
													<option value="EIE">Syllabus</option>
													<option value="ECE">Internal</option>
													<option value="CSE">Infrastructure</option>
												</select>
											
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="eMail">Meeting Subject</label>
												<input type="text" required class="form-control" name="subject" id="eMail" >
											</div>
										</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
												<div class="card-title">Message</div>
												<textarea required style="width: 606px;height: 106px;" class="summernote" name="message"></textarea>
										</div>
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
											<div class="form-group">
												<label for="venue">Venue</label>
												<input type="text" class="form-control" required name="location" id="venue">
											</div>
										</div>
										<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
											<div class="form-group">
												<label for="website">Date of Meeting</label>
												<input type="date" required class="form-control" name="date" id="website">
											</div>
										</div>
										<div class="col-xl-3 col-lglg-3 col-md-3 col-sm-3 col-3">
												<div class="form-group">
													<label for="inputEmail">Time</label>
													<input type="time" class="form-control" name="time" id="inputEmail" placeholder="Time">
												</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
											<!-- <div class="form-group"> -->
											<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
											<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
											<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
											<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
											<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

											<select  name="emaillist[]" class="selectpicker" multiple data-live-search="true">
	<?php
	// connection query.
	$sql = "select * from registration";
	$result = mysqli_query($link,$sql);
	while($rs = mysqli_fetch_object($result))
	{
		echo "<option>".$rs->email."</option>";
	}
	?>
  
</select>
											<!-- </div> -->
										</div>
										
										
							
									</div>
									
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="card-body">
													<div class="share-thoughts-container">
														<div class="text-right">
															<button type="submit" id="submit" name="submit"class="btn btn-primary">Send</button>
														</div>
													</div>
<?php

if(isset($_POST['submit']))
{
	
	//print_r($_POST);
	$email=$_POST['emaillist'];
	for($x=0;$x<count($email);$x++)
	{
		//email list se jayeega mal individual.
	
			$to = $email[$x];
			$subject = $_POST['subject'];

			$message = "
			Respected Faculties,<br>
			Greeting of the Day.<br>

			It is to inform your all that the meeting is going to be held on : ".$_POST['date']."
			<p>Location: ".$_POST['location']."</p>
			<p>".$_POST['message']."</p>
			<br>


			Thanks & Regards,
			University of Kalyani
			Department of Engineering and Technological Studies
			";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: Univercity of Kalyani<info@kalyani.com>' . "\r\n";
			//$headers .= 'Cc: myboss@example.com' . "\r\n";

			mail($to,$subject,$message,$headers);
			echo "<script>alert('Invitation sent successfully!!');window.location='http://localhost/wts/testdets/meeting.php';</script>";
	}

	//$usql = "insert into accsetting(url,state,city,street,pin,about) values('".$_POST['url']."','".$_POST['state']."','".$_POST['city']."','".$_POST['street']."','".$_POST['pin']."','".$_POST['about']."')";
	//  $usql = "update registered_students set name='".$_POST['name']."', contact='".$_POST['contact']."',link='".$_POST['url']."', street='".$_POST['street']."', city='".$_POST['city']."', state='".$_POST['state']."', pin='".$_POST['pin']."', aboutuser='".$_POST['about' ]."' where id='".$_POST['userid']."'";
	//  $info = mysqli_query($link,$usql);
	// echo "<script>window.location='setting.php?status=1';</script>";
	//  
	// $image= $_FILES['image']['name'];
	// $image_temp= $_FILES['image']['temp_name'];
	// $path= 'img/'.$image;
	// $link= mysqli_connect("localhost","root","","dets");
	// move_uploaded_file($image_temp,$path);
	// $rsql = "select * from registration where email ='".$data['email']."';
	// $update = mysqli_query($link,$rsql); 
	// $rem = mysqli_fetch_assoc($update);
	// $ursql = UPDATE 'registration' SET 'name' = '$data['name']', 'email'='$data['email']', 'contact'='$data['contact']', 'image' = '$data['image']' where 'id'='$data['id']';
}


?>



												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</form>
				<!-- Row end -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page content end -->

	</div>
	<!-- Page wrapper end --

	</body>

</html>
<?php  include "footer.php"; ?>