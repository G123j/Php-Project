<!DOCTYPE html>
<html lang="en">

<h1> gaurav jaiswal </h1>
<!-- Mirrored from techzaa.getappui.com/techmin/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2024 04:17:02 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Dashboard | Techmin - Bootstrap 5 Admin & Dashboard Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
	<meta content="Techzaa" name="author" />

	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	
    <!-- Datatables css -->
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />


	
	<!-- Daterangepicker css -->
	<link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

	<!-- Vector Map css -->
	<link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

	<!-- Theme Config Js -->
	<script src="assets/js/config.js"></script>

	<!-- App css -->
	<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

	<!-- Icons css -->
	<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<!-- Begin page -->
	<div class="wrapper">

		<!-- ========== Topbar Start ========== -->
<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-1">

            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="index.php" class="logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index.php" class="logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Page Title -->
            <h4 class="page-title d-none d-sm-block">Dashboards</h4>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
            <li class="dropdown d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-magnify fs-2"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                    <span class="align-middle d-none d-lg-inline-block">English</span>
                    <span class="mdi mdi-chevron-down fs-22 d-none d-sm-inline-block align-middle"></span>

                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-mail-line fs-22"></i>

                    <span class="noti-icon-badge badge text-bg-purple">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold"> Messages</h6>
                            </div>
                            <div class="col-auto">
                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="max-height: 300px;" data-simplebar>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Cristina Pride <small class="fw-normal text-muted float-end ms-1">1 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our
                                            next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Sam Garret <small class="fw-normal text-muted float-end ms-1">2 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Yeah everything is fine</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Karen Robinson <small class="fw-normal text-muted float-end ms-1">2 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Wow that's great</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Sherry Marshall <small class="fw-normal text-muted float-end ms-1">3 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our
                                            next meeting</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <h5 class="noti-item-title fw-semibold fs-14">Shawn Millard <small class="fw-normal text-muted float-end ms-1">4 day ago</small></h5>
                                        <small class="noti-item-subtitle text-muted">Yeah everything is fine</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                        View All
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-notification-3-line fs-22"></i>
                    <span class="noti-icon-badge badge text-bg-pink">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold"> Notification</h6>
                            </div>
                            <div class="col-auto">
                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="max-height: 300px;" data-simplebar>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary-subtle">
                                <i class="mdi mdi-account text-primary"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="noti-time">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning-subtle">
                                <i class="mdi mdi-account-plus text-warning"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="noti-time">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger-subtle">
                                <i class="mdi mdi-heart text-danger"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <small class="noti-time">3 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-pink-subtle">
                                <span class="mdi mdi-account-box text-pink"></span>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admi
                                <small class="noti-time">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-purple-subtle">
                                <i class="mdi mdi-account-plus text-purple"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="noti-time">7 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success-subtle text-success">
                            </div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b>.
                                <small class="noti-time">Carlos Crouch liked</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                        View All
                    </a>

                </div>
            </li>

            <li class="d-none d-sm-inline-block">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                    <span class="ri-settings-3-line fs-22"></span>
                </a>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode">
                    <i class="ri-moon-line fs-22"></i>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" width="32" class="rounded-circle">
                    </span>
                    <span class="d-lg-block d-none">
                        <h5 class="my-0 fw-normal">Adams<i class="ri-arrow-down-s-line fs-22 d-none d-sm-inline-block align-middle"></i></h5>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="view.php?company_details=true" class="dropdown-item">
                        <i class="ri-account-pin-circle-line fs-16 align-middle me-1 "></i>
                        <span>My Account</span>
                    </a>

					<a href="add.php?add_admin=true" class="dropdown-item">
                        <i class="ri-account-pin-circle-line fs-16 align-middle me-1 "></i>
                        <span>Add Admin</span>
                    </a>



                    <!-- item-->
                    <a href="pages-profile.html" class="dropdown-item">
                        <i class="ri-settings-4-line fs-16 align-middle me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="pages-faq.html" class="dropdown-item">
                        <i class="ri-customer-service-2-line fs-16 align-middle me-1"></i>
                        <span>Support</span>
                    </a>

                    <!-- item-->
                    <a href="auth-lock-screen.html" class="dropdown-item">                
                        <i class="ri-lock-line fs-16 align-middle me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="auth-logout.html" class="dropdown-item">
                        <i class="ri-logout-circle-r-line align-middle me-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- ========== Topbar End ========== -->

		<!-- Left Sidebar Start -->
		<div class="leftside-menu">

		    <!-- Logo Light -->
		    <a href="index.php" class="logo logo-light">
		        <span class="logo-lg">
		            <img src="assets/images/logo.png" alt="logo">
		        </span>
		        <span class="logo-sm">
		            <img src="assets/images/logo-sm.png" alt="small logo">
		        </span>
		    </a>

		    <!-- Logo Dark -->
		    <a href="index.php" class="logo logo-dark">
		        <span class="logo-lg">
		            <img src="assets/images/logo-dark.png" alt="dark logo">
		        </span>
		        <span class="logo-sm">
		            <img src="assets/images/logo-sm.png" alt="small logo">
		        </span>
		    </a>

		    <!-- Sidebar -->
		    <div data-simplebar>
		        <ul class="side-nav">
		            <li class="side-nav-title">Main</li>

		            <li class="side-nav-item">
		                <a href="index.php" class="side-nav-link">
		                    <i class="ri-dashboard-2-line"></i>
		                    <span> Dashboard </span>
		                    <span class="badge bg-success float-end">9+</span>
		                </a>
		            </li>

		            <li class="side-nav-title">Modules</li>
            
					<li class="side-nav-item">
		                <a href="add.php?register_company=true" class="side-nav-link">
		                    <i class="ri-calendar-line"></i>
		                    <span>Add Company Details</span>

		                </a>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarPagesinvoice" aria-expanded="false" aria-controls="sidebarPagesinvoice" class="side-nav-link">
		                    <i class="ri-article-line"></i>
		                    <span>Employees</span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarPagesinvoice">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="add.php?addemployee=true">Add Employee</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="view.php?viewemployee=true">View All Employees</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>


					<li class="side-nav-item">
				<a data-bs-toggle="collapse" href="#sidebarPagesMax" aria-expanded="false" aria-controls="sidebarPagesMax" class="side-nav-link">
					<i class="ri-article-line"></i>
					<span>Leaves</span>
					<span class="menu-arrow"></span>
				</a>
				<div class="collapse" id="sidebarPagesMax">
					<ul class="side-nav-second-level">
						<li class="">
							<a class="side-nav-link" href="add.php?add_holiday=true">Add Holiday</a>
						</li>
						<li class="">
							<a class="side-nav-link" href="view.php?employee_leaves=true">Employee Leaves</a>
						</li>
					</ul>
				</div>
			</li>


			<li class="side-nav-item">
				<a data-bs-toggle="collapse" href="#sidebarPagessax" aria-expanded="false" aria-controls="sidebarPagessax" class="side-nav-link">
					<i class="ri-article-line"></i>
					<span>Services</span>
					<span class="menu-arrow"></span>
				</a>
				<div class="collapse" id="sidebarPagessax">
					<ul class="side-nav-second-level">
						<li class="">
							<a class="side-nav-link" href="add.php?add_service=true">Add Service</a>
						</li>
						<li class="">
							<a class="side-nav-link" href="view.php?view_projects=true">View All Services</a>
						</li>
					</ul>
				</div>
			</li>



			<li class="side-nav-item">
				<a data-bs-toggle="collapse" href="#sidebarPagesMsax" aria-expanded="false" aria-controls="sidebarPagesMsax" class="side-nav-link">
					<i class="ri-article-line"></i>
					<span>Task Assign</span>
					<span class="menu-arrow"></span>
				</a>
				<div class="collapse" id="sidebarPagesMsax">
					<ul class="side-nav-second-level">
						<li class="">
							<a class="side-nav-link" href="add.php?add_holiday=true">Add Task</a>
						</li>
						<li class="">
							<a class="side-nav-link" href="view.php?employee_leaves=true">View All Task </a>
						</li>
					</ul>
				</div>
			</li>




			<li class="side-nav-item">
				<a data-bs-toggle="collapse" href="#wsidebarPagesMax" aria-expanded="false" aria-controls="wsidebarPagesMax" class="side-nav-link">
					<i class="ri-article-line"></i>
					<span>Leaves</span>
					<span class="menu-arrow"></span>
				</a>
				<div class="collapse" id="wsidebarPagesMax">
					<ul class="side-nav-second-level">
						<li class="">
							<a class="side-nav-link" href="add.php?add_holiday=true">Add Holiday</a>
						</li>
						<li class="">
							<a class="side-nav-link" href="view.php?employee_leaves=true">Employee Leaves</a>
						</li>
					</ul>
				</div>
			</li>


					





					

		            <li class="side-nav-title">Extra Pages</li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
		                    <i class="ri-stack-line"></i>
		                    <span> Pages </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarPages">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="add.php?addleaves=true">AddLeave</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-contact-list.html">Contact List</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-profile.html">Profile</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-timeline.html">Timeline</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-faq.html">FAQ</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-pricing.html">Pricing</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="pages-maintenance.html">Maintenance</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="error-404.html">Error 404</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="error-404-alt.html">Error 404-alt</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="error-500.html">Error 500</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
		                    <i class="ri-account-circle-line"></i>
		                    <span> Authentication </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarPagesAuth">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-login.html">Login</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-register.html">Register</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-logout.html">Logout</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-forgotpw.html">Forgot Password</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="auth-lock-screen.html">Lock Screen</a>
		                        </li>

		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
		                    <i class="ri-layout-line"></i>
		                    <span class="badge bg-warning float-end">New</span>
		                    <span> Layouts </span>
		                </a>
		                <div class="collapse" id="sidebarLayouts">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-light-sidebar.html" target="_blank">Light Sidebar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-sm-sidebar.html" target="_blank">Small Sidebar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-collapsed-sidebar.html" target="_blank">Collapsed Sidebar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-unsticky-layout.html" target="_blank">Unsticky Layout</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="layouts-boxed.html" target="_blank">Boxed Layout</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-title">Components</li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
		                    <i class="ri-briefcase-line"></i>
		                    <span> Base UI </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarBaseUI">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-accordions.html">Accordions</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-alerts.html">Alerts</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-avatars.html">Avatars</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-buttons.html">Buttons</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-button-group.html">Button group</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-badges.html">Badges</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-breadcrumb.html">Breadcrumb</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-cards.html">Cards</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-carousel.html">Carousel</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-collapse.html">Collapse</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-close-button.html">Close Button</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-dropdowns.html">Dropdowns</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-embed-video.html">Embed Video</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-grid.html">Grid</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-links.html">Links</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-list-group.html">List Group</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-modals.html">Modals</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-navbar.html">Navbar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-offcanvas.html">Offcanvas</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-placeholders.html">Placeholders</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-pagination.html">Pagination</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-popovers.html">Popovers</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-progress.html">Progress</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-scrollspy.html">Scrollspy</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-spinners.html">Spinners</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-toasts.html">Toasts</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-tabs.html">Tabs</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-tooltips.html">Tooltips</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-typography.html">Typography</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="ui-utilities.html">Utilities</a>
		                        </li>

		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
		                    <i class="ri-compass-3-line"></i>
		                    <span> Extended UI </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarExtendedUI">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="extended-portlets.html">Portlets</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="extended-scrollbar.html">Scrollbar</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="extended-range-slider.html">Range Slider</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
		                    <i class="ri-contrast-drop-2-line"></i>
		                    <span> Icons </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarIcons">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="icons-lucide.html">Lucide Icons</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="icons-remixicons.html">Remix Icons</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="icons-bootstrap.html">Bootstrap Icons</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="icons-mdi.html">Material Design Icons</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
		                    <i class="ri-pie-chart-2-line"></i>
		                    <span> Charts </span>
		                    <span class="menu-arrow"></span>
		                </a>
		                <div class="collapse" id="sidebarCharts">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="charts-apex.html">Apex Charts</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="charts-chartjs.html">Chartjs</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="charts-sparklines.html">Sparkline Charts</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
		                    <i class="ri-survey-line"></i>
		                    <span>Forms </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarForms">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-elements.html">Basic Elements</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-advanced.html">Form Advanced</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-validation.html">Form Validation</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-wizard.html">Form Wizard</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-fileuploads.html">File Uploads</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-editors.html">Form Editors</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-image-crop.html">Image Crop</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="form-x-editable.html">X Editable</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
		                    <i class="ri-table-line"></i>
		                    <span> Tables </span>
		                    <span class="menu-arrow"></span>


		                </a>
		                <div class="collapse" id="sidebarTables">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="tables-basic.html">Basic Tables</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="tables-datatable.html">Data Tables</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="tables-editable.html">Editable Tables</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="tables-responsive.html">Responsive Table</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
		                    <i class="ri-map-pin-line"></i>
		                    <span> Maps </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarMaps">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="maps-google.html">Google Maps</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="maps-vector.html">Vector Maps</a>
		                        </li>
		                    </ul>
		                </div>
		            </li>

		            <li class="side-nav-item">
		                <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
		                    <i class="ri-share-line"></i>
		                    <span> Multi Level </span>
		                    <span class="menu-arrow"></span>

		                </a>
		                <div class="collapse" id="sidebarMultiLevel">
		                    <ul class="side-nav-second-level">
		                        <li class="side-nav-item">
		                            <a class="side-nav-link" href="javascript: void(0);">Level 1.1</a>
		                        </li>
		                        <li class="side-nav-item">
		                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
		                                <span> Level 1.2 </span>
		                                <span class="menu-arrow"></span>
		                            </a>
		                            <div class="collapse" id="sidebarSecondLevel">
		                                <ul class="side-nav-third-level">
		                                    <li class="side-nav-item">
		                                        <a class="side-nav-link" href="javascript: void(0);">Item 1</a>
		                                    </li>
		                                    <li class="side-nav-item">
		                                        <a class="side-nav-link" href="javascript: void(0);">Item 2</a>
		                                    </li>
		                                </ul>
		                            </div>
		                        </li>
		                        <li class="side-nav-item">
		                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
		                                <span> Level 1.3 </span>
		                                <span class="menu-arrow"></span>
		                            </a>
		                            <div class="collapse" id="sidebarThirdLevel">
		                                <ul class="side-nav-third-level">
		                                    <li class="side-nav-item">
		                                        <a class="side-nav-link" href="javascript: void(0);">Item 1</a>
		                                    </li>
		                                    <li class="side-nav-item">
		                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
		                                            <span> Item 2 </span>
		                                            <span class="menu-arrow"></span>
		                                        </a>
		                                        <div class="collapse" id="sidebarFourthLevel">
		                                            <ul class="side-nav-forth-level">
		                                                <li class="side-nav-item">
		                                                    <a class="side-nav-link" href="javascript: void(0);">Item 2.1</a>
		                                                </li>
		                                                <li class="side-nav-item">
		                                                    <a class="side-nav-link" href="javascript: void(0);">Item 2.2</a>
		                                                </li>
		                                            </ul>
		                                        </div>
		                                    </li>
		                                </ul>
		                            </div>
		                        </li>
		                    </ul>
		                </div>
		            </li>
		        </ul>
		    </div>
		</div>
		<!-- Left Sidebar End -->
		