<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/roberto/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 11:44:29 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Hotel &amp; Resort</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/sky-forms.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
		.login-form {
			width: 340px;
			margin: 50px auto;
			font-size: 15px;
		}

		.login-form form {
			margin-bottom: 15px;
			background: #f7f7f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.login-form h2 {
			margin: 0 0 15px;
		}

		.form-control,
		.btn {
			min-height: 38px;
			border-radius: 2px;
		}

		.btn {
			font-size: 15px;
			font-weight: bold;
		}
		
	</style>
	<link rel="icon" href="img/core-img/favicon.png">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<!-- Header  -->
	<header class="header-area">
		<div class="top-header-area">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="top-header-content">
							<a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
							<a href="#"><i class="icon_mail"></i> <span><span class="__cf_email__" data-cfemail="9bf2f5fdf4b5f8f4f7f4e9f7f2f9dbfcf6faf2f7b5f8f4f6">[email&#160;protected]</span></span></a>
						</div>
					</div>
					<div class="col-6">
						<div class="top-header-content">
							<div class="top-social-area ml-auto">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="main-header-area">
			<div class="classy-nav-container breakpoint-off">
				<div class="container">
					<nav class="classy-navbar justify-content-between" id="robertoNav">
						<a class="nav-brand" href="index.html"><img src="img/core-img/ghm.png" alt=""></a>
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>
						<div class="classy-menu">
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>
							<div class="classynav">
								<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
									<li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
									<li><a href="room.php" class="nav-link px-2 link-dark">Rooms</a></li>
									<li><a href="about.php" class="nav-link px-2 link-dark">About Us</a></li>
									<li><a href="contact.php" class="nav-link px-2 link-dark">Contact</a></li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>



	<body>
		<div class="body body-s">

			<form action="signup_code.php" class="sky-form" method="POST">
				<header>
					<h4>Signup form</h4>
				</header>
				<?php
				if (!empty($_SESSION['error'])) {
					echo "<h3 style='color:red'>" . $_SESSION['error'] . "</h3>";
				}
				if (!empty($_SESSION['success'])) {
					echo "<h3 style='color:green'>" . $_SESSION['success'] . "</h3>";
				}
				?>
				<fieldset>
					<section>
						<label class="input">
							<i class="icon-append icon-user"></i>
							<input type="text" name="name" placeholder="Username">
							<b class="tooltip tooltip-bottom-right">Only characters</b>
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-envelope-alt"></i>
							<input type="text" name="email" placeholder="Email address">
							<b class="tooltip tooltip-bottom-right">only valid email account.</b>
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" name="password" placeholder="Password">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" name="confirm_password" placeholder="Confirm password">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</section>
					<section>
						<label class="input">
							<i class="icon-append fa fa-mobile"></i>
							<input type="int" name="mobile" placeholder="Mobile Number">
							<b class="tooltip tooltip-bottom-right">Only mobile numbers</b>
						</label>
					</section>
					<section>
						Gender:- 
							<input type="radio" name="gender" value=" 1 "> Male&nbsp;
							<input type="radio" name="gender" value=" 2" > Female&nbsp;
							<input type="radio" name="gender" value=" 3" > Other&nbsp;
					</section>

					<!-- <section>
					<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I agree to the Terms of Service</label>
					<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I want to receive news and  special offers</label>
					</section> -->
				</fieldset>
				<footer>
					<button type="submit" name="submit" class="button">Submit</button>
				</footer>

			</form>
		</div>

		<!-- include footer-->

		<?php

		include "include/footer.php";

		?>
		<script src="js/jquery.min.js"></script>

		<script src="js/popper.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="js/roberto.bundle.js"></script>

		<script src="js/default-assets/active.js"></script>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'UA-23581568-13');
		</script>
		<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"61ed567a6f793972","si":10,"version":"2021.2.0"}'></script>
	</body>

	<!-- Mirrored from preview.colorlib.com/theme/roberto/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 11:44:33 GMT -->

</html>