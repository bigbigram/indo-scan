<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Indo Venture Pvt. Limited">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="assets/icons/icon-72x72.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/solid.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest -->
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="16x16" href="assets/16.png">
    <link rel="apple-touch-icon" sizes="20x20" href="assets/20.png">
    <link rel="apple-touch-icon" sizes="29x29" href="assets/29.png">
    <link rel="apple-touch-icon" sizes="32x32" href="assets/32.png">
    <link rel="apple-touch-icon" sizes="40x40" href="assets/40.png">
    <link rel="apple-touch-icon" sizes="48x48" href="assets/48.png">
    <link rel="apple-touch-icon" sizes="50x50" href="assets/50.png">
    <link rel="apple-touch-icon" sizes="55x55" href="assets/55.png">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/60.png">
    <link rel="apple-touch-icon" sizes="64x64" href="assets/64.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/76.png">
    <link rel="apple-touch-icon" sizes="80x80" href="assets/80.png">
    <link rel="apple-touch-icon" sizes="87x87" href="assets/87.png">
    <link rel="apple-touch-icon" sizes="88x88" href="assets/88.png">
    <link rel="apple-touch-icon" sizes="100x100" href="assets/100.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/120.png">
    <link rel="apple-touch-icon" sizes="128x128" href="assets/128.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/180.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/167.png">
    <link rel="apple-touch-icon" sizes="172x172" href="assets/172.png">
    <link rel="apple-touch-icon" sizes="196x196" href="assets/196.png">
    <link rel="apple-touch-icon" sizes="216x216" href="assets/216.png">
    <link rel="apple-touch-icon" sizes="256x256" href="assets/256.png">
    <link rel="apple-touch-icon" sizes="512x512" href="assets/512.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="assets/1024.png">
    <link rel="manifest" href="manifest.json">
    <script>
        //if browser support service worker
        if('serviceWorker' in navigator) {
          navigator.serviceWorker.register('service-worker.js');
        };
      </script>
</head>
<body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
        <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only"></div>
        </div>
    </div>
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
        <!-- Background Shape-->
        <div class="background-shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-8"><img class="big-logo" src="img/main-logo.png" width="250" alt="">
                 <h3 style="color:white">Indo Venture Pvt. Ltd.</h3>
                    <!-- Register Form-->
                    <div class="register-form mt-5">
                        <form  action="auth.php"  method="POST">
                         <?php
                                if (isset($_SESSION['password'])) {
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong></strong>
                                    <?= $_SESSION['password']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php
                                    unset($_SESSION['password']);
                                }
                
                                ?>
                            <div class="form-group text-start mb-4"><span>Phone Number</span>
                                <label for="username"><i class="fa-solid fa-user"></i></label>
                                <input type="number" name="username" class="form-control" placeholder="Phone Number" autocomplete="off" required>
                            </div>
                            <div class="form-group text-start mb-4"><span>Password</span>
                                <label for="password"><i class="fa-solid fa-key"></i></label>
                                <input type="password" name="password" class="form-control" Placeholder="Password" autocomplete="off" required>
                            </div>
                            <button class="btn btn-warning btn-lg w-100" type="submit">Log In</button>
                        </form>
                    </div>
                </div>
                <!-- View As Guest-->
            </div>
        </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/theme-switching.js"></script>
    <script src="js/active.js"></script>
</body>

</html>