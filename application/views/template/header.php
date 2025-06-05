<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Himatif UPB</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="" name="keywords" />
		<meta content="" name="description" />

		<!-- Lgo-->
		<link href=" <?php base_url() ?>../assets/img/logo/himatif.png" rel="icon" />

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap"
			rel="stylesheet"/>

		<!-- Icon Font Stylesheet -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
			rel="stylesheet"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
			rel="stylesheet"/>

		<!-- Libraries Stylesheet -->
		<link href=" <?php base_url() ?>../assets/lib/animate/animate.min.css" rel="stylesheet" />
		<link href=" <?php base_url() ?>../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

		<!-- Customized Bootstrap Stylesheet -->
		<link href=" <?php base_url() ?>../assets/css/bootstrap.min.css" rel="stylesheet" />
		
		<link rel="stylesheet" type="text/css" href="<?php base_url() ?>../assets/css/bootstrap.css">
    	<script type="text/javascript" src="js/jquery.js"></script>
    	<script type="text/javascript" src="js/bootstrap.js"></script>

		<!-- Template Stylesheet -->
		<link href=" <?php base_url() ?>../assets/css/style.css" rel="stylesheet" />
		<link rel="stylesheet" href=" <?php base_url() ?>../assets/css/font-awesome.css" />
		<link rel="stylesheet" href=" <?php base_url() ?>../assets/css/royal-preload.css" />
		<link rel="stylesheet" href=" <?php base_url() ?>../assets/css/owl.carousel.min.css" />
		<link rel="stylesheet" href=" <?php base_url() ?>../assets/css/font-awesome.css" />
		<link rel="stylesheet" href=" <?php base_url() ?>../assets/css/magnific-popup.css" />
	</head>

	<body>
		<!-- Spinner Start -->
		<div
			id="spinner"
			class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-grow text-primary" role="status"></div>
		</div>
		<!-- Spinner End -->

		<!-- Topbar Start -->
		<div class="container-fluid bg-light text-gradient p-0">
			<div class="row gx-0 d-none d-lg-flex">
				<div class="col-lg-7 px-5 text-start">
					<div class="h-100 d-inline-flex align-items-center me-4">
						<small class="fa fa-envelope -alt text-primary me-2"></small>
						<small>himatif.pbti@gmail.com</small>
					</div>
				</div>
				<div class="col-lg-5 px-5 text-end">
					<div class="h-100 d-inline-flex align-items-center me-4">
						<small class="fa fa-phone-alt text-primary me-2"></small>
						<small>087775365921</small>
					</div>
					<div class="h-100 d-inline-flex align-items-center mx-n2">
						<a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
							href="https://www.facebook.com/himatif.pelitabangsa"><i class="fab fa-facebook-f"></i></a>
						<a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" 
							href="https://www.instagram.com/himatif_pb?igsh=MTI4amgxMWU0Ym5wOA=="><i class="fab fa-instagram"></i></a>
						<a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
							href="https://www.youtube.com/@himatifupb4555"><i class="bi bi-youtube"></i></a>

						<!-- ini baru
						<a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
							href="https://www.youtube.com/@himatifupb4555">
							<i class="fab fa-youtube"></i></a>
						<a class="btn btn-square btn-link rounded-0"
							href="https://www.instagram.com/himatif_pb/?hl=id"><i class="fab fa-instagram"></i></a> -->
					</div>
				</div>
			</div>
		</div>
		<!-- Topbar End -->

		<!-- Navbar Start -->
		<nav style="text-transform: lowercase;" class="navbar navbar-expand-lg bg-dark navbar-light sticky-top p-0">
			<a href="<?php echo base_url()?>himatif/index"
				class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
				<img height="50px" src=" <?php base_url() ?>../assets/img/logo/logo-bg.png" />
			</a>
			<button
				type="button"
				class="navbar-toggler me-4"
				data-bs-toggle="collapse"
				data-bs-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto p-4 p-lg-0">
					<div class="nav-item dropdown">
						<a href="<?php echo base_url()?>himatif/index" class="nav-link">Home</a>
					</div>
					<div class="nav-item dropdown">
						<a href="#"
							class="nav-link dropdown-toggle"
							style="text-transform: capitalize;"
							data-bs-toggle="dropdown">Departemen
						</a>
						<div class="dropdown-menu bg-light m-0">
							<a href="<?php echo base_url(). 'himatif/pm' ?>" class="dropdown-item" style="text-transform: capitalize;">
								Penjamin Mutu</a>
							<a href="<?php echo base_url()?>himatif/ksb" class="dropdown-item" style="text-transform: capitalize;"
								>Pengurus Inti</a>
							<a href="<?php echo base_url()?>himatif/po" class="dropdown-item" style="text-transform: capitalize;"
								>Pengembangan Organisasi</a>
							<a href="<?php echo base_url()?>himatif/medkom" class="dropdown-item" style="text-transform: capitalize;"
								>Media Komunikasi dan Informasi</a>
							<a href="<?php echo base_url()?>himatif/miba" class="dropdown-item" style="text-transform: capitalize;"
								>Minat dan Bakat</a>
							<a href="<?php echo base_url()?>himatif/litbang" class="dropdown-item" style="text-transform: capitalize;"
								>Penelitan dan Pengembangan</a>
							<a href="<?php echo base_url()?>himatif/hubin" class="dropdown-item" style="text-transform: capitalize;"
								>Hubin Hubeks</a>
						</div>
					</div>
					<a href="#" class="nav-item nav-link" style="text-transform: capitalize;">iTech</a>
					<a href="#" class="nav-item nav-link" style="text-transform: capitalize;">Galeri</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" style="text-transform: capitalize;" data-bs-toggle="dropdown"
							>Event</a>
						<div class="dropdown-menu bg-light m-0">
							<a href="<?php echo base_url()?>himatif/itfast_2" class="dropdown-item" style="text-transform: capitalize;"
							>IT FAST</a>
							<!-- <a href="appointment.html" class="dropdown-item" style="text-transform: capitalize;">Workshop</a> -->
						</div>
					</div>
					<!-- <a href="contact.html" class="nav-item nav-link" style="text-transform: capitalize;">Contact</a> -->
				</div>
				<a href="<?php echo base_url()?>login/admin" class="btn btn-light py-4 px-lg-5 d-none d-lg-block" style="text-transform: capitalize;"
					>Login<i class="bi bi-door-open ms-3"></i></a>
			</div>
		</nav>
		<!-- Navbar End -->
