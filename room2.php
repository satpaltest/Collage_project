<?php 
session_start();
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
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Hotel &amp; Resort </title>

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
            <h2 class="page-title">Our Room</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Room</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- rooms start -->
  <div class="roberto-rooms-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">

          <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">

            <div class="room-thumbnail">
              <img src="img/bg-img/43.jpg" alt="">
            </div>

            <div class="room-content">
              <h2>Room View Sea</h2>
              <h4>400$ <span>/ Day</span></h4>
              <div class="room-feature">
                <h6>Size: <span>30 ft</span></h6>
                <h6>Capacity: <span>Max persion 5</span></h6>
                <h6>Bed: <span>King beds</span></h6>
                <h6>Services: <span>Wifi, television ...</span></h6>
              </div>
              <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">

            <div class="room-thumbnail">
              <img src="img/bg-img/44.jpg" alt="">
            </div>

            <div class="room-content">
              <h2>Small Room</h2>
              <h4>400$ <span>/ Day</span></h4>
              <div class="room-feature">
                <h6>Size: <span>30 ft</span></h6>
                <h6>Capacity: <span>Max persion 5</span></h6>
                <h6>Bed: <span>King beds</span></h6>
                <h6>Services: <span>Wifi, television ...</span></h6>
              </div>
              <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">

            <div class="room-thumbnail">
              <img src="img/bg-img/45.jpg" alt="">
            </div>

            <div class="room-content">
              <h2>Premium King Room</h2>
              <h4>400$ <span>/ Day</span></h4>
              <div class="room-feature">
                <h6>Size: <span>30 ft</span></h6>
                <h6>Capacity: <span>Max persion 5</span></h6>
                <h6>Bed: <span>King beds</span></h6>
                <h6>Services: <span>Wifi, television ...</span></h6>
              </div>
              <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="700ms">

            <div class="room-thumbnail">
              <img src="img/bg-img/46.jpg" alt="">
            </div>

            <div class="room-content">
              <h2>Room Vip King</h2>
              <h4>400$ <span>/ Day</span></h4>
              <div class="room-feature">
                <h6>Size: <span>30 ft</span></h6>
                <h6>Capacity: <span>Max persion 5</span></h6>
                <h6>Bed: <span>King beds</span></h6>
                <h6>Services: <span>Wifi, television ...</span></h6>
              </div>
              <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="900ms">

            <div class="room-thumbnail">
              <img src="img/bg-img/47.jpg" alt="">
            </div>

            <div class="room-content">
              <h2>Royal Room</h2>
              <h4>400$ <span>/ Day</span></h4>
              <div class="room-feature">
                <h6>Size: <span>30 ft</span></h6>
                <h6>Capacity: <span>Max persion 5</span></h6>
                <h6>Bed: <span>King beds</span></h6>
                <h6>Services: <span>Wifi, television ...</span></h6>
              </div>
              <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
                  <div class="range-price">Max Price: $0 - $3000</div>
                  <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="3000" data-label-result="Max Price: ">
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
        </div>
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


  <footer class="footer-area section-padding-80-0">

    <div class="main-footer-area">
      <div class="container">
        <div class="row align-items-baseline justify-content-between">

          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-footer-widget mb-80">

              <a href="#" class="footer-logo"><img src="img/core-img/logo2.png" alt=""></a>
              <h4>+12 345-678-9999</h4>
              <span><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e4ad8a828bca878b888b96888d86a48389858d88ca878b89">[email&#160;protected]</a></span>
              <span>856 Cordia Extension Apt. 356, Lake Deangeloburgh, South Africa</span>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-footer-widget mb-80">

              <h5 class="widget-title">Our Blog</h5>

              <div class="latest-blog-area">
                <a href="#" class="post-title">Freelance Design Tricks How</a>
                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2019</span>
              </div>

              <div class="latest-blog-area">
                <a href="#" class="post-title">Free Advertising For Your Online</a>
                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2019</span>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-4 col-lg-2">
            <div class="single-footer-widget mb-80">

              <h5 class="widget-title">Links</h5>

              <ul class="footer-nav">
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Room</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Career</a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
              </ul>
            </div>
          </div>

          <div class="col-12 col-sm-8 col-lg-4">
            <div class="single-footer-widget mb-80">

              <h5 class="widget-title">Subscribe Newsletter</h5>
              <span>Subscribe our newsletter gor get notification about new updates.</span>

              <form action="https://preview.colorlib.com/theme/roberto/index.html" class="nl-form">
                <input type="email" class="form-control" placeholder="Enter your email...">
                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copywrite-content">
        <div class="row align-items-center">
          <div class="col-12 col-md-8">

            <div class="copywrite-text">
              <p>
                Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
              </p>
            </div>
          </div>
          <div class="col-12 col-md-4">

            <div class="social-info">
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>



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