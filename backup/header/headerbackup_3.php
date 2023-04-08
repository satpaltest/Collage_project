<?php
error_reporting(0);
require "conn.php";
?>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="img/core-img/favicon.png">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- css  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<style>
/* start nav bar css */
.b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.form-control-dark {
    color: #fff;
    background-color: var(--bs-dark);
    border-color: var(--bs-gray);
}

.form-control-dark:focus {
    color: #fff;
    background-color: var(--bs-dark);
    border-color: #fff;
    box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
}

.bi {
    vertical-align: -.125em;
    fill: currentColor;
}

.text-small {
    font-size: 85%;
}

.dropdown-toggle {
    outline: 0;
}


/* end nav bar css */
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

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    // mobile no validate
    function validate_mobile(mobile) {
        var pattern = /^[7-9]\d{9}$/;

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

        if (validate_mobile(phone) == false) $('#mobile_no').html(
            '<div  style="color:red;">Enter Valid mobile number</div>').fadeIn();
        else
            var otp = (Math.floor(Math.random() * 10000) + 10000).toString().substring(1);
        console.log(otp);

        window.setTimeout(function() {
            $('#mobile_no').fadeOut();
        }, 2000)
        //display otp on uesr screeb...
        document.getElementById('otp_display').innerHTML = otp;


        if (validate_mobile(phone) == true) {

            $('#otpdiv').css("display", "block");
            $('#sendotp').css("display", "none");
            $('#verifyotp').css("display", "block");
        }



        $('#verifyotp').click(function() {

            var phone = $('#mobile').val();
            var verify = $('#otp-verify').val();
            console.log(phone);
            console.log(verify);


            if (otp == verify) {
                /*$('#otp_msg').html('<div class="alert alert-success">OTP Verified successfully</div>');*/
                //redirect to another page 
                window.location.href = 'signup.php';
                return false;
            } else
                $('#otp_msg').html('<div class="alert alert-danger">otp did not match</div>');


        });
    });
});
</script> -->
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
                    <a class="nav-brand"><img src="img/core-img/ghm.png" alt=""></a>
                    <div class="container">
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                    <use xlink:href="#bootstrap"/>
                                </svg>
                            </a>
                            
                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                                <li><a href="room.php" class="nav-link px-2 link-dark">Rooms</a></li>
                                <li><a href="about.php" class="nav-link px-2 link-dark">About Us</a></li>
                                <li><a href="contact.php" class="nav-link px-2 link-dark">Contact</a></li>
                            </ul>


                            <div class="dropdown text-end col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                        class="rounded-circle">
                                </a>
                                <?php  if(!empty($_SESSION['username1'])) {
                                    echo $_SESSION['username1'];?>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">

                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>

                                <?php }else{ ?>
                                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" >
                                    <li class="p-3 mb-2 "><a class="dropdown-item" href="login.php"><button type="button" class="btn btn-primary">Log In</button></a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="p-3 mb-2 "><a class="dropdown-item" href="signup.php"><button type="button" class="btn btn-primary">Sign In</button></a></li>
                                </ul>

                                <?php } ?>
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

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
    data-cf-beacon='{"rayId":"61ed567a6f793972","si":10,"version":"2021.2.0"}'>
</script>