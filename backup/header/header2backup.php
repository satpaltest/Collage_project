<?php 
error_reporting(0);
require "conn.php";
?>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="img/core-img/favicon.png">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<style>
	.hint-text {
		text-align: center;
		margin-bottom: 15px;
		padding: 10px;
		font-size: 15.5px;
		color: #000000;
	}
	.dropdown-menu.action-form {
		width: auto;
		padding: 10px 15px;
		background-color: #ffffffc2;
		border: none;
	}
	.or-seperator {
		margin-top: 32px;
		text-align: center;
		border-top: 1px solid #e0e0e0;
	}
	.or-seperator b {
		color: #666;
		padding: 0 8px;
		width: 30px;
		height: 30px;
		font-size: 13px;
		text-align: center;
		line-height: 26px;
		background: #fff;
		display: inline-block;
		border: 1px solid #e0e0e0;
		border-radius: 50%;
		position: relative;
		top: -15px;
		z-index: 1;
	}
	#otpdiv {
		display: none;
	}
	#verifyotp {
		display: none;
	}
</style>
<style>
	.modal-backdrop.show {
		opacity: .5;
		z-index: 9;
	}
</style>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
		// mobile no validate
		function validate_mobile(mobile) {
			var pattern = /^[6-9]\d{9}$/;

			if (mobile == '') {

				return false;
			} else if (!pattern.test(mobile)) {

				return false;
			} else {

				return true;
			}
		}

		$('#sendotp').click(function() {

			var phone = $('#mobile').val();

			// if (phone == '') {

			// 	$('#mobile_no').html('<div class="alert alert-danger">Enter Phone Number</div>');
			// }else{

			// var otp = (Math.floor(Math.random() * 10000) + 10000).toString().substring(1);
			// console.log(otp); 
			// }

			if (validate_mobile(phone) == false) $('#mobile_no').html('<div  style="color:red;">Enter Valid mobile number</div>').fadeIn();
			else
				var otp = (Math.floor(Math.random() * 10000) + 10000).toString().substring(1);
			console.log(otp);

			window.setTimeout(function() {
				$('#mobile_no').fadeOut();
			}, 2000)
			//display otp on uesr screeb...
			document.getElementById('otp_display').innerHTML=otp;




			if (validate_mobile(phone) == true) {

				$('#otpdiv').css("display", "block");
				$('#sendotp').css("display", "none");
				$('#verifyotp').css("display", "block");
			}

		

		 $('#verifyotp').click(function(){

		var phone = $('#mobile').val();
		var verify = $('#otp-verify').val();
		console.log(phone);
		console.log(verify);


		if(otp == verify) {/*$('#otp_msg').html('<div class="alert alert-success">OTP Verified successfully</div>');*/
		//redirect to another page 
		window.location.href = 'signup.php';
        return false;
    	}
           // $('.show_form').show();
           // $('#button').hide();
           // $('.unreg_otp').hide();
          else
          	$('#otp_msg').html('<div class="alert alert-danger">otp did not match</div>');

			
		// 	var otp = $('#otp').val();
		// 	//console.log(otp);

		// 		//success: function(data) {
		// 			if (otp == verifyotp) {
		// 				$('#otp_msg').html('<div class="alert alert-success">OTP Verified successfully</div>').show().fadeOut(4000);
		// 			} else {
		// 				$('#otp_msg').html('<div class="alert alert-danger">otp did not match</div>').show().fadeOut(4000);

		// 			}
				
			
		// 	// //console.log(data);

		// 	// if (otp == true) {
		// 	// 	$('.otp_msg').html('<div class="alert alert-success">OTP Verified successfully</div>')

		// 	// }
		// });


			});
		});
	});
</script>
<header class="header-area">
	<div class="search-form d-flex align-items-center">
		<div class="container">
			<form action="#" method="post">
				<input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
				<button type="submit"><i class="icon_search"></i></button>
			</form>
		</div>
	</div>

	<div class="top-header-area">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="top-header-content">
						<a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
						<a href="#"><i class="icon_mail"></i> <span><span class="__cf_email__" data-cfemail="a3cacdc5cc8dc0cccfccd1cfcac1e3c4cec2cacf8dc0ccce">[email&#160;protected]</span></span></a>
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
				<a class="nav-brand" href="index.php"><img src="img/core-img/ghm.png" alt=""></a>
					<div class="classy-navbar-toggler">
						<span class="navbarToggler"><span></span><span></span><span></span></span>
					</div>

					<div class="classy-menu">
						<div class="classycloseIcon">
							<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
						</div>

						<div class="classynav">
							<ul id="nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="room.php">Rooms</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
							
							<div class="classynav">
								<ul id="nav" ><i class="fas fa-user-circle"></i>
									<li>
										<?php  if(!empty($_SESSION['username1'])) {
										   echo $_SESSION['username1'];?>
										   <ul class="dropdown">
											   <li><a href="#">My Account</a>
													<ul class="dropdown">
													<li><a href="userprofile.php">My Profile</a></li>
													<li><a href="#">Booking History</a></li>
													</ul>
												</li>
												<li><a href="logout.php">LogOut</a></li>
											</ul>
											<?php } else{ ?>
												<a href="#"> Profile</a>
												
												<ul class="dropdown">
												<li><a data-toggle="modal" data-target="#exampleModalCenter2">LogIn</a> 
												<a data-toggle="modal" data-target="#exampleModalCenter" >Signup</a>
											<?php } ?>
												
												<!-- Modal BOX -->
												<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle2">LogIn Form</h5>

																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>

															<div class="modal-body">

																<?php
																  if(!empty($_SESSION['error'])){
																  echo "<h6 style='color:red'>".$_SESSION['error']."</h6>";
																  }
																  if(!empty($_SESSION['success'])){
																  echo "<h6 style='color:green'>".$_SESSION['success']."</h6>";
																  }
																?>
																<form action="login-code.php" method="POST">
																	<div class="form-group">
																		<label>Enter your Email</label>
																		<input type="text" name="email" id="email" class="form-control" placeholder="Enter your email">
																	</div>
																	<div class="form-group">
																		<label>Enter Password</label>
																		<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
																	</div>
																	<div class="form-group" >
																		<button type="submit" class="btn btn-success btn-block" name="submit" id="login">LogIn</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
												<!-- end of model box-->
											</li>
											<li>
											
												<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLongTitle">SignUp Form</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<form method="POST">
																	<div class="form-group" id="otp_msg">
																		<label>Enter Moblie No.</label>
																		<input type="text" id="mobile" class="form-control" placeholder="Enter your Mobile no.">
																		<div id="mobile_no"></div>
																	</div>
																	<button type="button" id="sendotp" class="btn btn-primary" data-target="#exampleModalCenter" />Send OTP</button>
																	<div class="form-group" id="otpdiv">
																		Your OTP is: <span style="color: red;" id="otp_display"></span><br>
																		<label>Enter OTP</label>
																		<input type="text" class="form-control" id="otp-verify" placeholder="Enter OTP">
																	</div>
																	<div class="form-group">
																		<button type="button" class="btn btn-success" id="verifyotp">Verify OTP</button>&emsp;
																		<!-- <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;">Close</button> -->&emsp;
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</li>											
										</ul>
									</li>
								</ul>
							</div>		
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>




<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/roberto.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"61ed567a6f793972","si":10,"version":"2021.2.0"}'></script>



