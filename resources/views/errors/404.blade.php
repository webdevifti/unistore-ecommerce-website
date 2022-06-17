<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>404 error</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png" />
	<!-- loader-->
	<link href="{{ asset('admin_assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('admin_assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/icons.css') }}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/app.css') }}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light   shadow-none border-bottom bg-white rounded fixed-top rounded-0 shadow-sm">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					{{-- <img src="{{ asset('admin_assets/images/logo-img.png') }}" width="120" alt=""> --}}
					<a class="navbar-brand" href="{{ url('/') }}"> <i class="ion-cube"></i> Unistore</a>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
						{{-- <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class="bx bx-home-alt me-1"></i>Home</a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="#"><i class="bx bx-user me-1"></i>About</a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="#"><i class="bx bx-category-alt me-1"></i>Features</a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="#"><i class="bx bx-microphone me-1"></i>Contact</a>
						</li> --}}
					</ul>
				</div>
			</div>
		</nav>
		<div class="error-404 d-flex align-items-center justify-content-center">
			<div class="container">
				<div class="card radius-15 shadow-none">
					<div class="row g-0">
						<div class="col-lg-6">
							<div class="card-body p-5">
								<h1 class="display-1"><span class="text-primary">4</span><span class="text-danger">0</span><span class="text-success">4</span></h1>
								<h2 class="font-weight-bold display-4">Lost in Space</h2>
								<p>You have reached the edge of the universe.
									<br>The page you requested could not be found.
									<br>Dont'worry and return to the previous page.</p>
								<div class="mt-5">
									<a href="{{ url('/') }}" class="btn btn-lg btn-primary px-md-5 radius-30">Go Home</a>
									<a href="{{ url()->previous() }}" class="btn btn-lg btn-outline-dark ms-3 px-md-5 radius-30">Back</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<img src="{{ asset('admin_assets/images/errors-images/404-error.png') }}" class="card-img" alt="">
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
		</div>
		<div class="bg-white p-3 fixed-bottom border-top">
			<div class="d-flex align-items-center justify-content-between flex-wrap">
				<ul class="list-inline mb-0">
					<li class="list-inline-item">Follow Us :</li>
					<li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-facebook me-1'></i>Facebook</a>
					</li>
					<li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-twitter me-1'></i>Twitter</a>
					</li>
					<li class="list-inline-item"><a href="javascript:;"><i class='bx bxl-google me-1'></i>Google</a>
					</li>
				</ul>
				<p class="mb-0">Unistore @ {{ date('Y') }} | Developed By : <a href="https://webdevifti.com" target="_blank">webdevifti</a></p>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- Bootstrap JS -->
	<script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
	
	<!--plugins-->
	<script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
</body>

</html>