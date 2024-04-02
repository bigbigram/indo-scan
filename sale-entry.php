<?php
include("db.php");
include('session2.php');
date_default_timezone_set('Asia/Thimphu');
$Curdate = date('Y-m-d');
  
function generateUnique6DigitNumber() {
    // Generate an array of digits from 0 to 9
    $digits = range(0, 9);

    // Shuffle the array to get a random order
    shuffle($digits);

    // Ensure that the first digit is not 0 to make it a 6-digit number
    while ($digits[0] == 0) {
        shuffle($digits);
    }

    // Take the first 6 digits to form the unique number
    $uniqueNumber = implode('', array_slice($digits, 0, 6));

    return $uniqueNumber;
}

// Example usage
$randomNumber = generateUnique6DigitNumber();

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
  <title>SALE ENTRY</title>
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
  <script src="ht.js"></script>
  <!-- Web App Manifest -->
</head>
<body>
  <!-- Preloader-->
  <div class="preloader" id="preloader">
    <div class="spinner-grow text-secondary" role="status">
      <div class="sr-only"></div>
    </div>
  </div><br><br>
  <!-- Header Area-->
  <center>
    <div style="width:300px;height:80px" id="reader">
    </div><audio id="myAudio1">
      <source src="success.mp3" type="audio/ogg">
    </audio>
    <audio id="myAudio2">
      <source src="failes.mp3" type="audio/ogg">
    </audio>
  </center>
   <!-- Header Area-->
   <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
        <!-- Back Button-->
        <div class="back-button me-2"><a href="offline-sale.php"><i class="fa-solid fa-arrow-left-long"></i></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">SALE ENTRY SCAN</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas">
          <div><span></span><span></span><span></span></div>
        </div>
      </div>
    </div>
  <?php include "inc/header.php" ?>
  <script>
    var x = document.getElementById("myAudio1");
    var x2 = document.getElementById("myAudio2");

    function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
      }
    }

    function playAudio() {
      x.play();
    }
  </script><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <form id="barcodeForm" action="insert-sale.php?" method="GET">
    <input type="number" name="id" class="form-control" placeholder="Scan Code" id="search_text" autocomplete="off" required><br>
    <input type="hidden" name="sid" class="form-control" placeholder="Scan Code" value="<?php echo $randomNumber?>" autocomplete="off" required>
  </form>
   <script src="https://rawgit.com/dwa012/html5-qrcode/master/html5-qrcode.min.js"></script>
  <script type="text/javascript">
    function onScanSuccess(qrCodeMessage) {
      document.getElementById("search_text").value = qrCodeMessage;
      showHint(qrCodeMessage);
      playAudio();

      // Auto submit the form
      document.getElementById("barcodeForm").submit();
    }

    function onScanError(errorMessage) {
      // Handle scan error
      console.log(errorMessage);
    }
    var html5QrcodeScanner = new Html5QrcodeScanner(
      "reader", {
        fps: 10,
        qrbox: 250
      });

    html5QrcodeScanner.render(onScanSuccess, onScanError);
  </script>
   <div class="modal fade" id="sendMessageModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Search by name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form class="comment-form" action="get-product-by-name-purchase.php" method="GET">
            <div class="col-lg-6">
              <div class="mb-3 mb-0">
                <small>Just type single keyword (Example: Water, Bread etc)</small><br>
                <label class="text-black font-w600 form-label">PRODUCT NAME<span class="required">*</span></label>
                <input type="text" name="vItemFullName" class="form-file-input form-control" autocomplete="off" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3 mb-0">
                <input type="submit" class="submit btn btn-primary" value="Search">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <style>
        .modal {
            display: none;
            /* Hide the modal by default */
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            /* Semi-transparent black background */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 300px;
            text-align: center;
        }
    </style>
  <!-- Internet Connection Status-->
  <?php include "inc/footer.php" ?>
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