<?php
include("db.php");
include('session.php');
date_default_timezone_set('Asia/Thimphu');
$Curdate = date('Y-m-d');

$randomNumber=$_GET['randomNumber'];  
?>
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
  <title>ADD MORE ITEM</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="assets/icons/icon-72x72.png">
  <!-- CSS Libraries -->
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
</head>
<body>
  <!-- Preloader-->
  <div class="preloader" id="preloader">
    <div class="spinner-grow text-secondary" role="status">
      <div class="sr-only"></div>
    </div>
  </div><br><br><br>
   <!-- Header Area-->
   <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
        <!-- Back Button-->
        <div class="back-button me-2"><a href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">SCAN MORE ITEM TO CART</h6>
        </div>
        <!-- Navbar Toggler-->
        <div>
          <div>
             </div>
        </div>
      </div>
    </div>
  <div>
     <center>
   <a href="cart-item.php?entryId=<?php echo $randomNumber?>" class="btn btn-danger">MAKE BILL</a>
   <form action="insert-sale.php?" method="GET"><br><br>
    <input type="number" name="id" class="form-control"style="width: 450px"  placeholder="Scan Barcode to Add More Items" id="search_text" autocomplete="off" required>
    <input type="hidden" name="sid" class="form-control" placeholder="Scan Code" value="<?php echo $randomNumber?>" autocomplete="off" required>
  </form>
     </center>
   <script>
    window.onload = function() {
        document.getElementById("search_text").focus(); // Focus on input field when the page loads
    };
    document.addEventListener('click', function(event) {
        var inputField = document.getElementById("search_text");
        var isClickInsideInput = inputField.contains(event.target);

        if (!isClickInsideInput) {
            inputField.focus(); // Focus on input field if the click is outside
        }
    });
</script>
  <!-- All JavaScript Files-->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.passwordstrength.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/theme-switching.js"></script>
  <script src="js/no-internet.js"></script>
  <script src="js/active.js"></script>
</body>
</html>