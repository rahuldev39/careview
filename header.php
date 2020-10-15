<!doctype html>
<html lang="eng">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="assets/css/w3.css">
		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" href="http://www.celltob.net/clients/careview/bootstrap.min.css">
		<!-- Owl Theme Default CSS --> 
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- Owl Carousel CSS --> 
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- Owl Magnific CSS --> 
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- Animate CSS --> 
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Boxicons CSS --> 
		<link rel="stylesheet" href="assets/css/boxicons.min.css"> 
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Meanmenu CSS -->
		<link rel="stylesheet" href="assets/css/meanmenu.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="assets/css/nice-select.css">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="assets/css/odometer.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/img/favicon.png">

		<!--<link rel="stylesheet" type="text/css" href="newcss/bootstrap.min.css">-->
		<link rel="stylesheet" type="text/css" href="newcss/style.css">

		<link rel="stylesheet" type="text/css" href="newcss/extra.css">
		
		<!-- Title -->
		<title>Careview</title>
    </head>

    <body onload="myFunction()">
        <div id="loading"></div>
       
		 
		
		
		
		
		
	
		

<!-- Start Heder Area --> 
		<header class="header-area fixed-top">
			<!-- <div class="top-header-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<!--<ul class="header-content-left">
								<li>
									<a href="mailto:hello@surety.com">
										<i class="bx bx-envelope"></i>
										Email: hello@trice.com
									</a>
								</li>

								<li>
									<a href="tel:+61-821-456">
										<i class="bx bx-phone-call"></i>
										Call Us: +61-821-456
									</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-6 col-sm-6">
							<ul class="header-content-right">
								<li>
									<a href="mailto:Info@careview.in" color="#ffffff" style="color:#ffffff;">
										<i class="bx bx-envelope"></i>
										Email: Info@careview.in
									</a>
								</li>

								<li>
									<a href="tel:18001020241" color="#ffffff" style="color:#ffffff;">
										<i class="bx bx-phone-call"></i>
										Call Us: 18001020241
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->

			<!-- Start Navbar Area -->
			<div class="nav-area">
				<div class="navbar-area">
					<!-- Menu For Mobile Device -->
					<div class="mobile-nav">
						<a href="index.php" class="logo">
							<img src="assets/img/logo.png" alt="Logo">
						</a>
						<a href="tel:+91 9953218688" class="whatapp-mobile">
							<img src="./img/whatsapp.svg" class="w-100" alt="">
						</a>
					</div>

					<!-- Menu For Desktop Device -->
					<div class="main-nav">
						<nav class="navbar navbar-expand-md">
								<a class="navbar-brand" href="index.php">
									<img src="assets/img/logo-3.png" alt="Logo">
								</a>
								
								<div class="collapse navbar-collapse mean-menu">
									<ul class="navbar-nav">
									
										<li class="nav-item">
											<a href="index.php" class="nav-link <?php if($page=='home'){echo"active";}else{} ?>">
												HOME
											</a>
										</li>

										<li class="nav-item">
											<a href="about.php" class="nav-link <?php if($page=='about'){echo"active";}else{} ?>">ABOUT</a>
										</li>
										
										<li class="nav-item">
											<a href="#" class="nav-link">
												PRODUCTS
												<!--<i class="bx bx-chevron-right"></i>-->
											</a>

											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="n95-mask.php" class="nav-link">
														N95 MASK
														<i class="bx bx-chevron-right"></i>
													</a>

													<ul class="dropdown-menu">
														<li class="nav-item">
															<a href="n95-mask.php#CV-1221" class="nav-link">CV-1221</a>
														</li>
														<li class="nav-item">
															<a href="n95-mask.php#CV-1221V" class="nav-link">CV-1221V</a>
														</li>
														<li class="nav-item">
															<a href="n95-mask.php#CV-1221H" class="nav-link">CV-1221H</a>
														</li>
														<li class="nav-item">
															<a href="n95-mask.php#CV-1221HV" class="nav-link">CV-1221HV</a>
														</li>
													</ul>
												</li>
												<li class="nav-item">
													<a href="3ply-mask.php" class="nav-link">
														3 PLY MASK
														<i class="bx bx-chevron-right"></i>
													</a>

													<ul class="dropdown-menu">
														<li class="nav-item">
															<a href="3ply-mask.php#CV-2992" class="nav-link">CV-2992</a>
														</li>
														<li class="nav-item">
															<a href="3ply-mask.php#CV-2992M" class="nav-link">CV-2992M</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
																				
										<!--<li class="nav-item">-->
										<!--	<a href="blog" class="nav-link">BLOG</a>-->
										<!--</li>-->

										<!--<li class="nav-item">-->
										<!--	<a href="videos.php" class="nav-link">GALLERY</a>-->
										<!--</li>-->
										
										<li class="nav-item">
											<a href="partner.php" class="nav-link <?php if($page=='partner'){echo"active";}else{} ?>">PARTNER WITH US</a>
										</li>

										<li class="nav-item line">
											<a href="contact.php" class="nav-link <?php if($page=='contact'){echo"active";}else{} ?>">CONTACT</a>
										</li>
									
									</ul>
									
									<!-- Start Other Option -->
									<div class="others-option">
										<div class="get-quote">
											<a href="tel:+91 9953218688" class="default-btn" style="font-weight:bold;">
												WHATSAPP US
											</a>
										</div>
									</div>
									<!-- End Other Option -->
								</div>

						</nav>
					</div>
				</div>
			</div>
			<!-- End Navbar Area -->
		</header>
		<!-- End Heder Area -->
		
		
<script>
		// $(document).ready(function(){
			// 	$('div#loading').removeAttr('id');
		// });
		var preloader = document.getElementById("loading");
		// window.addEventListener('load', function(){
		// 	preloader.style.display = 'none';
		// 	})

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
	