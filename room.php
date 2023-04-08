<!-- add header path -->
<?php
session_start();
include "include/header.php";
include "conn.php";
$query = "SELECT * FROM hotel_guest";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

$h_query = "SELECT * FROM guest_house_gallery";
$h_result = mysqli_query($conn, $h_query);
$h_total = mysqli_num_rows($h_result);

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/roberto/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 11:44:29 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Guest House</title>

	<link rel="icon" href="img/core-img/favicon.png">

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="preloader">
		<div class="loader"></div>
	</div>
	<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="breadcrumb-content text-center">
						<h2 class="page-title"> Our Room</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Room</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="roberto-rooms-area section-padding-100-0">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8">

					<div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">

						<div class="room-thumbnail">
							<?php if ($h_total) {
								while ($rows = mysqli_fetch_assoc($h_result)) {
									//echo '<pre>'; print_r($rows);
							?>

									<img src="http://localhost/Guest_house/pic/<?php echo $rows['h_id']; ?>/<?php echo $rows['h_image']; ?>">

								<?php }  ?>
						</div>
						<div class="room-content">
							<?php
								if ($total != 0) {
									while ($result = mysqli_fetch_assoc($data)) { ?>

									<h2><?php echo $result['h_name']; ?></h2>
									<h4><?php echo $result['h_prices']; ?><span>/ Day</span></h4>
									<div class="room-feature">
										<h6>Rooms: <span><?php echo $result['h_rooms']; ?></span></h6>
										<h6>Capacity: <span>Max persion 2</span></h6>
										<h6>location: <span><?php echo $result['h_location']; ?></span></h6>
										<h6>Services: <span>Wifi, television ...</span></h6>
									</div>
									<a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									<div class="form-group">
										<button type="submit" class="btn roberto-btn w-100">BOOK</button>
									</div>

						<?php }
								}
							} ?>
						</div>
					</div>

					<nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- upper footer -->
	<section class="roberto-cta-area">
		<div class="container">
			<div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
				<div class="row align-items-center">
					<div class="col-12 col-md-7">
						<div class="cta-text mb-50">
							<h2>Contact us now!</h2>
							<h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
						</div>
					</div>
					<div class="col-12 col-md-5 text-right">
						<a href="#" class="btn roberto-btn mb-50">Contact Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="partner-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">

						<a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>

						<a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>

						<a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>

						<a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>

						<a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- include footer-->

	<?php

	include "include/footer.php";

	?>

</body>

<!-- Mirrored from preview.colorlib.com/theme/roberto/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 11:44:33 GMT -->

</html>