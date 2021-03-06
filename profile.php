<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Account Settings UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#"><img src="images/Bat_Logo.png"/></a>
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="tr" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="procedure.php">Procedures</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="profile.php">Profile</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="login.php">Logout</a>
				  </li>
				</ul>
			  </div>
			</div>
		  </nav>
	</section>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Scholar Profile</h1>
			<div class="bg-transparent shadow rounded-lg d-sm-flex">
				<div class=" profile profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="Images/avatar.png" id="photo" alt="Image">
							<input type="file" id="file">
							<label for="file" id="uploadbtn">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</label>
						</div>
					</div>
					<script src="photo.js"></script>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							Account
						</a>
						<a class="nav-link" id="educ-tab" data-toggle="pill" href="#educ" role="tab" aria-controls="educ" aria-selected="false">
							Educational Background
						</a>
						<a class="nav-link" id="requirement-tab" data-toggle="pill" href="#requirement" role="tab" aria-controls="requirement" aria-selected="false">
							Requirement
						</a>
						<a class="nav-link" id="evaluation-tab" data-toggle="pill" href="#evaluation" role="tab" aria-controls="evaluation" aria-selected="false">
							Evaluation Form
						</a>
						<a class="nav-link" id="inquiries-tab" data-toggle="pill" href="#inquiries" role="tab" aria-controls="inquiries" aria-selected="false">
							Inquiries
						</a>
					</div>
				</div>
			<!----Account----->
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Information</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								  	<label>First Name</label>
								  	<input type="text" name="first-name" id="first-name"class="form-control form-control-sm" value=""required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								  	<label>Middle Name</label>
								  	<input type="text" name="middle-name" id="middle-name" class="form-control form-control-sm" value="" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								  	<label>Last Name</label>
								  	<input type="text" name="last-name" id="last-name" class="form-control form-control-sm" value="" required>
								</div>
							</div>
							<div class="suffix col-md-2">
								<div class="form-group">
								  	<label>Name Suffix</label>
								  	<input type="text" name="Name Suffix" id="Name-Suffix" class="form-control form-control-sm" value=""  >
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  	<label>Birth Date</label>
								  	<input type="text" class="form-control" placeholder="mm/dd/yyyy" required>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
								  	<label>Birth Place</label>
								  	<input type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								  	<label>Age</label>
								  	<input type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<span class="details">Sex</span>
									<select name="sex" id="sex" class="form-control form-control-sm" required> 
										<option value=""></option>
										<option value="male">Male</option>
										  <option value="female">Female</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone number</label>
								  	<input type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								  	<label>Registration Code</label>
								  	<input type="text" class="form-control" required>
								</div>
							</div>
							<div class="scholar-details">
								<div class="form-group">
									<input type="radio" name="scholar" id="dot-1">
									<input type="radio" name="scholar" id="dot-2">
									<input type="radio" name="scholar" id="dot-3">
									<input type="radio" name="scholar" id="dot-4">
									<span class="scholar-title">Scholar Categories</span>
									<div class="category">
									  <label for="dot-1">
									  <span class="dot one"></span>
									  <span class="scholar">BSEAP</span>
									</label>
									<label for="dot-2">
									  <span class="dot two"></span>
									  <span class="scholar">BPSP -SCHEME1</span>
									</label>
									<label for="dot-3">
									  <span class="dot three"></span>
									  <span class="scholar">BPSP - SCHEME2</span>
									  </label>
									  <label for="dot-4">
										<span class="dot four"></span>
										<span class="scholar">PWD</span>
										</label>
									</div>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
								  	<label>House Address</label>
								  	<input type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span class="details">Barangay</span>
									<select name="barangay" id="barangay"class="form-control form-control-sm" required> 
										<option value=""></option>
										<option value=""></option>
										  <option value=""></option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span class="details">City/Municipality</span>
									<select name="City/Municipality" id="City/Municipality"class="form-control form-control-sm" required> 
										<option value=""></option>
										<option value="4211">Agoncillo</option>
										<option value="4205">Alitagtag</option>
										<option value="4213">Balayan</option>
										<option value="4219">Balete</option>
										<option value="4200">Batangas City</option>
										<option value="4201">Bauan</option>
										<option value="4212">Calaca</option>
										<option value="4215">Calatagan</option>
										<option value="4222">Cuenca</option>
										<option value="4230">Ibaan</option>
										<option value="4221">Laurel</option>
										<option value="4209">Lemery</option>
										<option value="4216">Lian</option>
										<option value="4217">Lipa City</option>
										<option value="4229">Lobo</option>
										<option value="4202">Mabini</option>
										<option value="4233">Malvar</option>
										<option value="4223">Mataasnakahoy</option>
										<option value="4231">Nasugbu</option>
										<option value="4224">Padre Garcia</option>
										<option value="4225">Rosario</option>
										<option value="4227">San Jose</option>
										<option value="4226">San Juan</option>
										<option value="4210">San Luis</option>
										<option value="4207">San Nicolas</option>
										<option value="4204">San Pascual</option>
										<option value="4206">Santa Teresita</option>
										<option value="4234">Sto. Tomas City</option>
										<option value="4208">Taal</option>
										<option value="4220">Talisay</option>
										<option value="4232">Tanauan City</option>
										<option value="4228">Taysan</option>
										<option value="4203">Tingloy</option>
										<option value="4214">Tuy</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  	<label>Province</label>
								  	<input type="text" class="form-control" value="Batangas"required>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<!---- /Account ----->
					<!---- Educational BG----->
						<div class="tab-pane fade" id="educ" role="tabpanel" aria-labelledby="educ-tab">
							<h3 class="mb-4">Educational Background</h3>
							<div class="row">
								<div class="col-md-9">
									<div class="form-group">
										  <label>Program/Course</label>
										  <input type="text" name="program-name" id="program-name"class="form-control form-control-sm" value="" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										  <label>Year Level</label>
										  <input type="text" name="year-name" id="year-name" class="form-control form-control-sm" value="" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										  <br><label>Total No. of Units</label>
										  <input type="text" name="units-num" id="units-num" class="form-control form-control-sm" value="" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										  <br><label>Expected Year of Graduation</label>
										  <input type="text" name="year-num" id="year-num" class="form-control form-control-sm" value=""  >
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
                                           <br><label for="check">Graduating?</label>
											<input type="checkbox" id="check"> 
                                        </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>School Name</label>
										  <input type="text" class="form-control form-control-sm" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>School Address</label>
										  <input type="text" class="form-control form-control-sm" required>
									</div>
								</div>
							</div>
							</div>
					<!---- /Educational BG----->
					<!---- Requirements----->
					<div class="tab-pane fade" id="requirement" role="tabpanel" aria-labelledby="requirement-tab">
						<h3 class="mb-4">Uploading of Requirement</h3>
						<div class="card ">
							<div class="card-body" style="overflow: auto;">
								<table class="table">
									<thead>
                                        <tr>
                                            <th width="50%">Requirement</th>
											<th>Submit</th>
                                            <th>Attachment</th>
                                        </tr>
										<form action="incl/upload.php" method='post' enctype="multipart/form-data">
                                    </thead>
									<tbody>
										<tr>
											<td>
												Certified True Copy of Registration Form
											</td>
											<td>

													<input type="file" name = "file[]" id="file-docu">
													<label for="file" id="upload"></label>
											</td>
											<td>
												<a href="#" target="_blank" class=" btn btn-scholar">View Attachment</a>
											</td>
										</tr>
										<tr>
											<tr>
												<td>
													Certified True Copy of Grades
												</td>
												<td>
														<input type="file" name = "file[]" id="file-docu">
														<label for="file" id="upload"></label>
												</td>
												<td>
													<a href="#" target="_blank" class="btn btn-scholar">View Attachment</a>
												</td>
										</tr>
										<tr>
											<td>
												Photocopy of Student I.D.
											</td>
											<td>
													<input type="file" name="file[]" id="file-docu">
													<label for="file" id="upload"></label>
											</td>
											<td>
												<a href="#" target="_blank" class="btn btn-scholar">View Attachment</a>
											</td>
									</tbody>
								
								</table>
								<button type="submit" name = "uploadFiles">Submit</button>
							</div>
						</div>
					</div>
					</form>
		<!-----Inquiries ----->			
					<div class="tab-pane fade" id="inquiries" role="tabpanel" aria-labelledby="inquiries-tab">
						<h3 class="mb-4">Inquiries</h3>
						<div class="card">
							<div class="card-body" style="overflow: auto;">
								<form action="#" method="post">
									<div class="form-group">
										<label for="message">Questions/Inquiries</label><br>
										<textarea type="text" id="message" name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
									</div>
									<button type="submit">
										Send
									</button>
								</form>
							</div>
						</div>
					</div>
		<!-----/Inquiries ----->	
		
		
		<!-----Evaluation Form ----->
					<div class="tab-pane fade" id="evaluation" role="tabpanel" aria-labelledby="evaluation-tab">
						<h3 class="mb-4">Application Form</h3>
						<div class="card">
							<div class="card-body" style="overflow: auto;">
								<div class="form-group row">
									<a href="" target="_blank" class="btn btn-scholar btn-block mt-3">Generate Evaluation Form</a>
								</div>
								<hr>
								 <form action="#" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="">
									<div class="form-group">
                                        <div class="col-md-12">
                                            <label class="col-form-label col-form-label-sm">Upload Accomplished Form</label>
                                            <br>
                                            <input type="file" name="evaluation_form" accept="#"> <button class="btn btn-m btn-eval">Submit Form</button>
                                        </div>
                                    </div>
									<div class="form-group row">
										<div class="col-md-12">
                                            <table class="table table-bordered">
                                                <tr style="text-align: center;">
                                                    <th>File</th>
                                                    <th>Status</th>
                                                </tr>
												<tr style="text-align: center;">
													<td>
                                                        <a target="_blank" href="#" class="btn btn-sm btn-scholar">
                                                            View Attachment
                                                        </a>
                                                    </td>
                                                    <td>
												</tr>
											</table>
									</div>
                                </form>
							</div>
						</div>
					</div>
		<!-----Evaluation Form ----->
				</div>
			</div>
		</div>
	</section>

	<!-- Main Footer -->
</div>
<link rel="stylesheet" href="footer.css">
<div class="footer">
<div class="row">
  <div class="column">
	<h2>  Batangas Scholarship</h2>
	<p> Address<br>
		Street<br>
		Municipality and Province<br>
		Country<br><br>
	</p>
  </div>
  <div class="column">
	<h2>Quick Links</h2>
	<ul>
	  <li><a href="#">Other Related Links</a></li>
	</ul>
  </div>
  <div class="column">
	<img src="Images/Front.jpg" alt="Logo" width="50%">
  </div>
</div> 
<div class="footer-bottom">
  &copy; Copyright <strong><span>Provincial Government of Batangas</span></strong>. All Rights Reserved
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>