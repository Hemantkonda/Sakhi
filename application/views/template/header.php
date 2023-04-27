<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Sakhi India</title>
	<meta name="description" content="Sakhi">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/sakhi.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/odometer.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
	

</head>

<body>


	<!--Preloader-->
	<div id="preloader">
		<div id="loader" class="loader">
			<div class="loader-container">
				<div class="loader-icon"><img src="<?php echo base_url();?>assets/img/sakhi.png" alt="Preloader"></div>
			</div>
		</div>
	</div>
	<!--Preloader-end -->

	<!-- Custom-cursor -->
	<div class="mouseCursor cursor-outer"></div>
	<div class="mouseCursor cursor-inner"><span>Drag</span></div>
	<!-- Custom-cursor-end -->

	<!-- Scroll-top -->
	<button class="scroll-top scroll-to-target" data-target="html">
		<i class="fas fa-angle-up"></i>
	</button>
	<!-- Scroll-top-end-->

	<!-- header-area -->
	<header>
		<div id="sticky-header" class="menu-area transparent-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
						<div class="menu-wrap">
							<nav class="menu-nav">
								<div class="logo">
									<a href="<?php echo base_url();?>home"><img
											src="<?= base_url()?>uploads/<?php echo $profile->logo?>" alt="Logo"></a>
								</div>
								<div class="navbar-wrap main-menu d-none d-lg-flex">
									<ul class="navigation">
										<li class="active menu-item-has-children"><a
												href="<?php echo base_url();?>home">Home</a>
											<!-- <ul class="sub-menu">
                                                <li class="active"><a href="index.html">Creative Agency</a></li>
                                                <li><a href="#">Personal Portfolio</a></li>
                                                <li><a href="#">Digital Agency</a></li>
                                            </ul> -->
										</li>
										<li><a href="<?php echo base_url();?>about">About Us</a></li>
										<li class="menu-item-has-children"><a
												href="<?php echo base_url();?>service">Service</a>
											<ul class="sub-menu">
												<li><a href="<?php echo base_url();?>babycare">Baby Care</a></li>
												<li><a href="#">Domestic Help</a></li>
												<li><a href="#">All-Rounders</a></li>
												<li><a href="#">Cook/Chef</a></li>
												<li><a href="#">Beautician</a></li>
												<li><a href="#">Sakhi</a></li>
												<li><a href="#">Elderly Care</a></li>
												<li><a href="#">Patient Care</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children"><a
												href="<?php echo base_url();?>contact">Contact</a>
										</li>
									</ul>
								</div>
								<div class="header-action">
									<!-- <button class="loginbtn">
										<span><img src="<?php echo base_url();?>assets/img/user.png" alt="" width="20px"></span>Login
									</button> -->
									<ul class="list-wrap">
										<li class="header-btn"> <a href="<?php echo base_url();?>login" class="login">
										<span><img src="<?php echo base_url();?>assets/img/user.png" alt="" width="20px"></span>LogIn
												<span></span></a></li>
									</ul>
								</div>
								<div class="header-action">
									<ul class="list-wrap">
										<li class="header-btn"> <a href="<?php echo base_url();?>cart" class="btn">Cart
												<span></span></a></li>
									</ul>
								</div>
							</nav>
						</div>

						<!-- Mobile Menu  -->
						<div class="mobile-menu">
							<nav class="menu-box">
								<div class="close-btn"><i class="fas fa-times"></i></div>
								<div class="nav-logo">
									<a href="index.html"><img src="<?= base_url()?>uploads/<?php echo $profile->logo?>"
											alt="Logo"></a>
								</div>
								<div class="menu-outer">
									<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
								</div>
								<div class="social-links">
									<ul class="clearfix list-wrap">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="menu-backdrop"></div>
						<!-- End Mobile Menu -->

					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header-area-end -->
