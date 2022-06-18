<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>@yield('title')</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('admin_assets/images/favicon-32x32.png') }}" type="image/png" />
	<!-- Vector CSS -->
	<link href="{{ asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
	<!--plugins-->
	<link href="{{ asset('admin_assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin_assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('admin_assets/css/pace.min.css' ) }}" rel="stylesheet" />
	<script src="{{ asset('admin_assets/js/pace.min.js') }}"></script>
	<!--Data Tables -->
	<link href="{{ asset('admin_assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin_assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css' ) }}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/icons.css' ) }}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/app.css' ) }}" />
	<link rel="stylesheet" href="{{ asset('admin_assets/css/dark-sidebar.css' ) }}" />
	<link rel="stylesheet" href="{{ asset('admin_assets/css/dark-theme.css' ) }}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="{{ asset('admin_assets/images/logo-icon.png') }}" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Unistore</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ route('home') }}">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li>
					<a href="emailbox.html">
						<div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
						</div>
						<div class="menu-title">Email</div>
					</a>
				</li>
			
			
				
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-10"><i class="bx bx-spa"></i>
						</div>
						<div class="menu-title">Products</div>
					</a>
					<ul>
						<li> <a href="{{ route('admin.manage-products.index') }}"><i class="bx bx-right-arrow-alt"></i>Manage Products</a>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New Product</a>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Product Trashed <span class="trash-count">1</span></a>
						</li>
					</ul>
				
				
				
			
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-11"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				<div class="flex-grow-1 search-bar">
					<div class="input-group">
						 <button class="btn btn-search-back search-arrow-back" type="button"><i class="bx bx-arrow-back"></i></button>
						 <input type="text" class="form-control" placeholder="search" />
						 <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i></button>
					</div>
				</div>
				<div class="right-topbar ms-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-bs-toggle="dropdown">	<span class="msg-count">1</span>
								<i class="bx bx-comment-detail vertical-align-middle"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">1 New</h6>
										<p class="msg-header-subtitle">Application Messages</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="{{ asset('admin_assets/images/avatars/avatar-1.png') }}" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
													ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-bs-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								<span class="msg-count">1</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">1 New</h6>
										<p class="msg-header-subtitle">Application Notifications</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
													ago</span></h6>
												<p class="msg-info">5 new user registered</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="d-flex user-box align-items-center">
									<div class="user-info">
										<p class="user-name mb-0">Jessica Doe</p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="{{ asset('admin_assets/images/avatars/avatar-1.png') }}" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">	
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>

								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
											  document.getElementById('logout-form').submit();">
											 <i class="bx bx-power-off"></i>
											 <span>{{ __('Logout') }}</span>
								 
							 </a>

							 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								 @csrf
							 </form>	
								
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
        			@yield('admin_content')
				</div>
			</div>
		</div>
        	<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Unistore @ {{ date('Y') }} | Developed By : <a href="https://webdevifti.com" target="_blank">webdevifti</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!--start switcher-->
	<div class="switcher-body">
		<button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
		<div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
		  <div class="offcanvas-header border-bottom">
			<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
		  </div>
		  <div class="offcanvas-body">
			<h6 class="mb-0">Theme Variation</h6>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
			  <label class="form-check-label" for="lightmode">Light</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
			  <label class="form-check-label" for="darkmode">Dark</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
				<label class="form-check-label" for="darksidebar">Semi Dark</label>
			  </div>
			  <hr>
			 <div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
				<label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
			  </div>
		  </div>
		</div>
	   </div>
	   <!--end switcher-->
	<!-- JavaScript -->
	<!-- Bootstrap JS -->
	<script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
	
	<!--plugins-->
	<script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!-- Vector map JavaScript -->
	<script src="{{ asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/vectormap/jquery-jvectormap-in-mill.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/vectormap/jquery-jvectormap-au-mill.js') }}"></script>
	<script src="{{ asset('admin_assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
	{{-- <script src="{{ asset('admin_assets/js/index2.js') }}"></script> --}}
	<!--Data Tables js-->
	<script src="{{ asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	
	<!-- App JS -->
	<script src="{{ asset('admin_assets/js/app.js') }}"></script>

	@yield('footer_scripts')
</body>

</html>