<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?= $data['page_title']?></title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/linearicons.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/themify-icons.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/nice-select.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/nouislider.min.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/main.css">


	<!-- CSS Node 
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/linearicons.css">
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>linearicons/dist/web-font/style.css">
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>themify-icons/themify-icons/_themify-icons.scss">
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>bootstrap-icons/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>owl.carousel\dist\assets\owl.carousel.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/nice-select.css">
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>nouislider\dist\nouislider.min.css">
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>ion-rangeslider\css\ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?= ASSETS . NODE ?>magnific-popup\dist\magnific-popup.css">
	<link rel="stylesheet" href="<?= ASSETS . THEME ?>css/main.css">
	-->

</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index"><img src="<?= ASSETS . THEME ?>img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav">
							
					</div>

					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
					
						<li class="nav-item"><a class="nav-link" href="shop">Shop</a></li>


						<li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>



						<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
					
						
						<?php if (isset($_SESSION['user_url'])) : ?>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="lnr lnr-user"></span><span class="ml-1"><?= $_SESSION['name'] ?></span></a>
								<ul class="dropdown-menu">
								<?php if(isset($_SESSION['rank']) && $_SESSION['rank'] == 'admin'): ?>
									<li class="nav-item"><a class="nav-link" href="<?= ROOT ?>admin">Admin</a></li>
								<?php endif; ?>
									<li class="nav-item"><a class="nav-link" href="profil">Profil</a></li>
									<li class="nav-item"><a class="nav-link" href="logout">Logout</a></li>
								</ul>
							</li> <?php else : ?>
							<li class="nav-item"><a class="nav-link" href="login"><span class="lnr lnr-user"></span><span class="ml-1">Login</span></a></li>
						<?php endif; ?>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
						<li class="nav-item">
							<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
						</li>
					</ul>

				</div>
		</div>
		</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->