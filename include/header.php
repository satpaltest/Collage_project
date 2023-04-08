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


.login-form label {
	color: #888;
	font-weight: normal;
}
.dropdown-menu.login-form {
	width: 280px;
	padding: 20px;
	left: auto;
	right: 0;
	font-size: 14px;
}
.dropdown-menu.login-form a {
	padding: 0 !important;
	color: #5c6ac4;
	font-weight: normal;
}
 .dropdown-menu.login-form a:hover{
	text-decoration: underline;
}
.dropdown-menu.login-form .checkbox-inline {
	margin-top: 10px;
}

.modal-backdrop.show {
        opacity: .5;
        z-index: 9;
    }

</style>
<header class="header-area">
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
                               <!-- login page -->
                                <ul class="nav navbar-nav navbar-right">			
                                    <li>
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
                                        <?php }else{?>
                                         <!-- login -->
                                        <div class="dropdown-menu login-form">
                                        <div class="login-form">
                                           
                                            <form action="login-code.php" method="post">
                                            <?php
                                            if(!empty($_SESSION['error'])){
                                            echo "<h6 style='color:red'>".$_SESSION['error']."</h6>";
                                            }
                                            if(!empty($_SESSION['success'])){
                                            echo "<h6 style='color:green'>".$_SESSION['success']."</h6>";
                                            }
                                            ?>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" name="username" class="form-control" required="required">
                                                </div>
                                                <div class="form-group">
                                                    <div class="clearfix">
                                                        <label>Password</label>
                                                        <a href="#" class="float-right text-muted"><small>Forgot?</small></a>
                                                    </div>                            
                                                    <input type="password" name="password" class="form-control" required="required">
                                                </div>
                                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
                                                <div class="text-center mt-2">
                                                    <a href="signup.php">Create new account.</a>
                                                </div>
                                            </form>					
                                        </div>
                                        <?php }?>			
		
                                    </li>
                                </ul>
                                <!-- login end page -->
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


<!-- login jquery -->
<script>
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
		e.stopPropagation();
	});
</script>