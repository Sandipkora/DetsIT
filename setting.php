<?php

include "menu.php";
include "footer.php";

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
					<div class="page-header">

						<!-- Breadcrumb start -->
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Account Settings</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App actions start -->

						<!-- App actions end -->

					</div>
					<!-- Page header end -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatar">
												<img src="img/user2.png" alt="Goldfinch Admin" />
											</div>
											<h5 class="user-name">Admin</h5>
											<h6 class="user-email">admin@gmail.com</h6>
										</div>
										<div class="about">
											<h6 class="mb-2 text-primary">About</h6>
											<p>I'm Admin. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<h6 class="mb-3 text-primary">Personal Details</h6>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Full Name</label>
												<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="eMail">Email</label>
												<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="website">Website URL</label>
												<input type="url" class="form-control" id="website" placeholder="Website url">
											</div>
										</div>
									</div>
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<h6 class="mb-3 text-primary">Address</h6>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="Street">Street</label>
												<input type="name" class="form-control" id="Street" placeholder="Enter Street">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="ciTy">City</label>
												<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="sTate">State</label>
												<input type="text" class="form-control" id="sTate" placeholder="Enter State">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="zIp">Zip Code</label>
												<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
											</div>
										</div>
									</div>
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<h6 class="mb-3 text-primary">About</h6>
											</div>
											<div class="card h-200">
											<div class="card-header">
									<div class="card-title">Write About Yourself</div>
									</div>
									<div class="card-body">
										<div class="share-thoughts-container">
											<textarea class="form-control" rows="3">Hello, </textarea>
											<div class="text-right">
												<button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
												<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
											</div>
										</div>
									</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end --

	</body>

</html>