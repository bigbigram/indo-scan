<?php
include("db.php");
include('session2.php');

date_default_timezone_set('Asia/Thimphu');
$Curdate = date('Y-m-d');
$query1 = mysqli_query($db, "select * from user where  Phone = '$login_session' ");
$row = mysqli_fetch_array($query1, MYSQLI_ASSOC);
$ID = $row["ID"];
$Name = $row["Name"];
$Branch = $row["Branch"];
$profilepic = $row["profilepic"];

$salebill=$_GET['salebill'];
$strSQL123 = mysqli_query($db, "select * from offilesale where entry_id='$salebill'");

$strQ = mysqli_query($db, "select * from offlinesalebill where billno='$salebill' ");
$row11 = mysqli_fetch_array($strQ, MYSQLI_ASSOC);
$net = $row11["net"];
$ledger = $row11["ledger"];
$transactionNumber = $row11["transactionNumber"];
$phoneNumber = $row11["phoneNumber"];
$cashier = $row11["cashier"];
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
  <!-- The above tags *must* come first in the head, any other head content must come *after* these tags -->
  <!-- Title -->
  <title>SALE BILL</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="assets/icons/icon-72x72.png">
  <!-- Apple Touch Icon -->
  <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
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
  <!-- Web App Manifest -->
  <!-- Datatable-->
  <link href="datatable/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="datatable/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="datatable/css/style.css" rel="stylesheet">
  <link href="datatable/assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
  <!-- Datatable-->
</head>

<body>
  <!-- Preloader-->
  <div class="preloader" id="preloader">
    <div class="spinner-grow text-secondary" role="status">
      <div class="sr-only"></div>
    </div>
  </div>
  <!-- Header Area-->
  <div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
      <!-- Back Button-->
      <div class="back-button me-2"><a href="offline-sale.php"><i class="fa-solid fa-arrow-left-long"></i></a></div>
      <!-- Page Title-->
      <div class="page-heading">
        <h6 class="mb-0">OFFLINE SALE BILL</h6>
      </div>
      <!-- Navbar Toggler-->
      <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas">
        <div><span></span><span></span><span></span></div>
      </div>
    </div>
  </div><br><br><br>
  <?php include "inc/header.php" ?>
    <div class="table-responsive">
              <center>
                  <h6>Cashier: <?php echo $cashier?> | Total Net: <?php echo $net?></h6>
              <h6>Ledger: <?php echo $ledger?> | Jrnl: <?php echo $transactionNumber?> Phone: <?php echo $phoneNumber?></h6></center>
              <table id="bootstrap-data-table-export" class="table table-striped table-bordered" style="min-width: 100px">
                <thead>
                  <tr>
                    <th style="font-size:11px">SL.</th>
                    <th style="font-size:11px">Barcode</th>
                    <th style="font-size:11px">Product</th>
                    <th style="font-size:11px">Price</th>
                    <th style="font-size:11px">Qty</th>
                    <th style="font-size:11px">Unit</th>
                    <th style="font-size:11px">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  while ($row = mysqli_fetch_array($strSQL123, MYSQLI_ASSOC)) :
                    $i = $i + 1;
                    $barcode = $row["barcode"];
                    $product = $row["product"];
                    $price = $row["price"];
                    $qty = $row["qty"];
                    $unit = $row["unit"];
                    $total = $row["total"];
                  ?>
                    <td style="font-size:11px"><?php echo $i; ?></td>
                    <td style="font-size:11px"><?php echo $barcode; ?></td>
                    <td style="font-size:11px"><?php echo $product; ?></td>
                    <td style="font-size:11px"><?php echo $price; ?></td>
                    <td style="font-size:11px"><?php echo $qty; ?></td>
                    <td style="font-size:11px"><?php echo $unit; ?></td>
                    <td style="font-size:11px"><?php echo $total; ?></td>
                    </tr>
                  <?php endwhile; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <?php include "inc/footer.php" ?>
  <!-- Datatable PDF AND EXCEL -->
  <script src="datatable/vendor/global/global.min.js"></script>
  <script src="datatable/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="datatable/js/plugins-init/datatables.init.js"></script>
  <script src="datatable/js/custom.min.js"></script>
  <script src="datatable/js/demo.js"></script>
  <script src="datatable/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
  <script src="datatable/assets/js/lib/data-table/buttons.flash.min.js"></script>
  <script src="datatable/assets/js/lib/data-table/jszip.min.js"></script>
  <script src="datatable/assets/js/lib/data-table/pdfmake.min.js"></script>
  <script src="datatable/assets/js/lib/data-table/vfs_fonts.js"></script>
  <script src="datatable/assets/js/lib/data-table/buttons.html5.min.js"></script>
  <script src="datatable/assets/js/lib/data-table/buttons.print.min.js"></script>
  <script src="datatable/assets/js/lib/data-table/datatables-init.js"></script>
  <!-- Datatable -->
  <!-- All JavaScript Files-->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/theme-switching.js"></script>
  <script src="js/no-internet.js"></script>
  <script src="js/active.js"></script>
</body>

</html>