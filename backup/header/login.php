<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/roberto/room.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 11:44:29 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Roberto - Hotel &amp; Resort HTML Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="https://preview.colorlib.com/theme/roberto/index.html" method="get">
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

    <!-- user login page -->


        <div class="login-form">
        <?php
        if(!empty($_SESSION['error'])){
        echo "<h6 style='color:red'>".$_SESSION['error']."</h6>";
        }
        if(!empty($_SESSION['success'])){
        echo "<h6 style='color:green'>".$_SESSION['success']."</h6>";
        }
        ?>
        <form action="login-code.php" method="post">
            <h2 class="text-center">User Login</h2>

            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="required" value="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required" value="">
            </div>
            <div>
                <?php
                if (isset($_GET['msg']))
                    echo $_GET['msg'];
                ?>
            </div>
            <br>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Log in</button>
            </div>
            <!-- <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>  -->
        </form>
        <p class="text-center"><a href="#">Create an Account</a></p>
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