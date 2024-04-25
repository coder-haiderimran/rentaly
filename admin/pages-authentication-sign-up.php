<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from qoduby.tempload.com/html/demo1/dist/pages-authentication-sign-up.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 06:36:39 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Qoduby - Admin & Dashboard template by tempload." />
	<meta name="keywords" content="qoduby, tempload, bootstrap, bootstrap 5, admin, template, dashboard, theme, admin themes, admin, templates" />
	<meta name="author" content="tempload" />	
	<title>Qoduby - Admin & Dashboard Template</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/media/logo/favicon.png" />	

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

	<!-- Global CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

	<!-- Light-Dark Mode & Theme Direction Selector -->
	<script src="assets/js/theme.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Terms and Conditions Start -->
	<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header px-4">
					<h5 class="modal-title fs-5">Terms and Conditions</h5>
					<button type="button" class="outline-none border-0 p0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">
						<i data-feather="x" stroke-width="1.5" class="text-body"></i>
					</button>
				</div>
				<div class="modal-body p6 px-3">
					<p>Donec eget dapibus tellus. Cras pharetra velit massa, vitae auctor velit rhoncus ac. Mauris lobortis tortor et porttitor mollis. Cras et luctus lectus, in sollicitudin urna. Nam lorem turpis, rutrum commodo diam a, luctus imperdiet velit. Cras erat neque, efficitur in tempus feugiat, interdum sit amet libero. Curabitur feugiat facilisis elit non mattis.</p>

					<p>Nam auctor est sodales velit dapibus semper. Sed dictum, nisl quis consequat imperdiet, dui ante pretium ante, ac tincidunt dolor mi in sapien. Maecenas viverra augue ligula, eu suscipit augue fermentum in. Quisque sollicitudin aliquet pretium. Maecenas suscipit, libero vitae bibendum sollicitudin, lectus nisi ultricies nisi, eget convallis dui odio et justo. Cras blandit quis est ut euismod. Praesent fringilla nibh dapibus, convallis libero quis, cursus sapien.</p>

					<p>Aenean condimentum fermentum fringilla. Morbi ultricies est lorem, vel ornare ante tempus at. Maecenas sollicitudin, magna ut ullamcorper tincidunt, urna nisl condimentum leo, ac placerat urna lorem id nibh. Proin dapibus nisi urna, id ultricies libero ultrices non. Cras scelerisque luctus felis sed lobortis. Nulla vel sapien neque. Praesent accumsan condimentum urna, eget auctor felis ornare sed. Maecenas rhoncus orci nec massa suscipit consectetur. Mauris mattis, augue non egestas feugiat, neque mauris condimentum lorem, volutpat consectetur urna dolor sit amet felis. Duis ornare ipsum non dictum placerat. Praesent pellentesque diam sed lacus vulputate tempor. Morbi ultrices sit amet sem sed tristique. Fusce in ullamcorper orci.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">I agree</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Terms and Conditions End -->

	<div class="container-fluid p0 overflow-hidden">
		<div class="row">
			<div class="col-lg-6 overflow-hidden">
				<div class="vh-100 bg-primary">
					<div class="p7 pb6">
						<div class="d-block mb6">
							<a href="index.php">
								<img src="assets/media/logo/logo-white.svg" class="height-30 mb6" alt="">
							</a>
						</div>
						<h3 class="mb4 text-white">Fast, Easy to Use and <br>Expandable</h3>
						<p class="text-white-50 m0">Have a flexible infrastructure with Qoduby.</p>
						<p class="text-white-50 m0">Coming every day for easy use...</p>
					</div>
					<div class="ps7 h-100">
						<div class="w-100 h-100 rounded-start overflow-hidden">
							<img src="assets/media/projects/ss.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="vh-100 d-flex align-items-center justify-content-center">
					<div class="w-60">
						<div class="d-flex flex-column align-items-center justify-content-center">
							<h5 class="mb3">Sign Up</h5>
							<p>Start managing your project faster and better</p>
							<div class="d-flex mb6">
								<a href="#" class="text-decoration-none d-flex align-items-center justify-content-center border rounded height-50 me2">
									<img src="assets/media/logos/google.svg" height="22" class="ps4 me3" alt="">
									<span class="text-heading pe4">Sign in with Google</span>
								</a>
								<a href="#" class="text-decoration-none d-flex align-items-center justify-content-center border rounded width-50 height-50 me2">
									<img src="assets/media/logos/apple.svg" height="22" alt="">
								</a>
								<a href="#" class="text-decoration-none d-flex align-items-center justify-content-center border rounded width-50 height-50 me2">
									<img src="assets/media/logos/facebook.svg" height="22" alt="">
								</a>
								<a href="#" class="text-decoration-none d-flex align-items-center justify-content-center border rounded width-50 height-50">
									<img src="assets/media/logos/twitter.svg" height="22" alt="">
								</a>
							</div>
							<div class="position-relative w-100 d-flex align-items-center justify-content-center mb5">
								<div class="position-absolute border-bottom w-100 z-1"></div>
								<span class="position-relative z-2 bg-body p3">OR</span>
							</div>
							<form action="#" class="needs-validation mb7" novalidate>
								<div class="row">
									<div class="col-12 mb4">
										<input class="form-control form-control-lg w-100" type="email" placeholder="Email">
									</div>
									<div class="col-12 mb4">
										<input id="password" class="form-control form-control-lg w-100" type="password" placeholder="Password">
									</div>
									<div class="col-12 mb3">
										<div class="d-flex" id="meter">
											<div class="meter-item bg-body-secondary rounded height-5 w-25 me3"></div>
											<div class="meter-item bg-body-secondary rounded height-5 w-25 me3"></div>
											<div class="meter-item bg-body-secondary rounded height-5 w-25 me3"></div>
											<div class="meter-item bg-body-secondary rounded height-5 w-25"></div>
										</div>
									</div>
									<div class="col-12 mb5">
										<small>Use 8 or more characters with a mix of letters, numbers & symbols.</small>
									</div>
									<div class="col-12 mb5">
										<input class="form-control form-control-lg w-100" type="password" placeholder="Repeat Password">
									</div>
									<div class="col-12 mb5">
										<div class="checkbox checkbox-primary me1">
											<input type="checkbox" name="check1" id="check1">
											<label for="check1">I agree to the <a href="#"  data-bs-toggle="modal" data-bs-target="#termsModal" class="text-primary text-decoration-none">Terms and Conditions</a></label>
										</div>
										
									</div>
									<div class="col-12">
										<button class="btn btn-primary w-100">Sign Up</button>
									</div>
								</div>
							</form>
							<p>Already have an account? <a href="#" class="text-decoration-none">Sign In</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Plugin Bundle -->
	<script src="assets/js/plugins.bundle.js" crossorigin="anonymous"></script>
	<!-- Common Javascript -->
	<script src="assets/js/app.js" crossorigin="anonymous"></script>
	<!-- Page Specific Javascript -->
	<script src="assets/js/pages/pages/authentication/sign-up.js" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from qoduby.tempload.com/html/demo1/dist/pages-authentication-sign-up.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2024 06:36:39 GMT -->
</html>