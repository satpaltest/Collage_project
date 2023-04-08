<!-- add header path -->
<?php 
	include "include/header.php";
	include "conn.php";
	$query = "SELECT * FROM hotel_guest";
	$data =mysqli_query($conn,$query);
	$total =mysqli_num_rows($data);
	
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
					
						<?php if($h_total){
							while($rows = mysqli_fetch_assoc($h_result)){
							//echo '<pre>'; print_r($rows);
						?>
						
						<img height="300" width="300" alt="" class="img-fluid rounded" src="http://localhost/Guest_house/pic/<?php echo $rows['h_id']; ?>/<?php echo $rows['h_image'];?>" /><div><br></div>
						
						<?php }  ?>
					<?php 	
					if($total !=0){
						while($result=mysqli_fetch_assoc($data))
						{?>	

						<h2><?php echo $result['h_name'];?></h2>
						<h4><?php echo $result['h_prices'];?><span>/ Day</span></h4>
						<div class="room-feature">
							<h6>Rooms: <span><?php echo $result['h_rooms'];?></span></h6>
							<h6>Capacity: <span>Max persion 4</span></h6>
							<h6>location: <span><?php echo $result['h_location'];?></span></h6>
							<h6>Services: <span>Wifi, television ...</span></h6>
						</div>
						
						<a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						<div class="form-group">
						<button type="submit" class="btn roberto-btn w-100">BOOK</button>
					</div><div></br></div>
						<?php }
						}
						else{
						echo"Sorry Guest house Records not found"; 
						}}  ?>
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
			<!--
			<div class="col-12 col-lg-4">

				<div class="hotel-reservation--area mb-100">
					<form action="#" method="post">
						<div class="form-group mb-30">
						<label for="checkInDate">Date</label>
						<div class="input-daterange" id="datepicker">
							<div class="row no-gutters">
								<div class="col-6">
								<input type="text" class="input-small form-control" id="checkInDate" name="checkInDate" placeholder="Check In">
								</div>
								<div class="col-6">
									<input type="text" class="input-small form-control" name="checkOutDate" placeholder="Check Out">
								</div>
							</div>
							</div>
						</div>
					<div class="form-group mb-30">
						<label for="guests">Guests</label>
						<div class="row">
							<div class="col-6">
								<select name="adults" id="guests" class="form-control">
									<option value="adults">Adults</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
								</select>
							</div>
							<div class="col-6">
								<select name="children" id="children" class="form-control">
									<option value="children">Children</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group mb-50">
						<div class="slider-range">
							<div class="range-price">Max Price:  RS 0 - RS 3000</div>
							<div data-min="0" data-max="3000" data-unit="RS " class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="3000" data-label-result="Max Price: ">
								<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
								<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
								<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
							</div>
						</div>
					</div>
					<div class="form-group">
					<button type="submit" class="btn roberto-btn w-100">Check Available</button>
					</div>
					</form>
				</div>
			</div>-->
		</div>
	</div>
</div>


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

include"include/footer.php";

?>
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
</body>

<!-- Mirrored from preview.colorlib.com/theme/roberto/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 11:44:33 GMT -->
</html>
