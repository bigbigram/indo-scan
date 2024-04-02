<?php 
include("db.php");
include('session.php');
date_default_timezone_set('Asia/Thimphu');
$Curdate = date('Y-m-d');
$query1 = mysqli_query($db,"select * from user where phone = '$login_session' ");  
$row = mysqli_fetch_array($query1,MYSQLI_ASSOC);
$id=$row["id"];
$name=$row["name"];
$entryId=$_GET['entryId'];
$strSQL= mysqli_query($db,"SELECT * FROM itemSale WHERE uid = '$id' AND vDocNo='$entryId' ORDER By id");
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
  <title>ITEM IN CART</title>
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
      <div class="back-button me-2"><a href="#" onclick="goBack()"><i class="fa-solid fa-arrow-left-long"></i></a></div>
      <!-- Page Title-->
      <div class="page-heading">
        <h6 class="mb-0">ITEMS ON CART</h6>
      </div>
      <!-- Navbar Toggler-->
      <div>
        <div></div>
      </div>
    </div>
  </div><br><br><br>
    <div class="table-responsive">
              <table class="table table-striped table-bordered" style="min-width: 100px">
                <thead>
                  <tr>
                    <th style="font-size:12px">SL</th>
                    <th style="font-size:12px">vDocNo</th>
                    <th style="font-size:12px">Barcode</th>
                    <th style="font-size:12px">Product</th>
                    <th style="font-size:12px">Mrp</th>
                    <th style="font-size:12px">Qty</th>
                    <th style="font-size:12px">Total</th>
                    <th style="font-size:12px">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $i = 0;
                  $NET = 0;
                  while ($rows = mysqli_fetch_array($strSQL, MYSQLI_ASSOC)) :
                    $i = $i + 1;
                    $sid=$rows["id"];
                    $vDocNo=$rows["vDocNo"];
                    $branch=$rows["branch"];
                    $barcode=$rows["barcode"];
                    $product=$rows["product"];
                    $barcode=$rows["barcode"];
                    $mrp=$rows["mrp"];
                    $qty=$rows["qty"];
                    $unit=$rows["unit"];
                    $total=$rows["total"];
                    
                    $NET += $total; 
                  ?>
                  <tr>
                    <td style="font-size:12px"><?php echo $i; ?></td>
                    <td style="font-size:12px"><?php echo $vDocNo; ?></td>
                    <td style="font-size:12px"><?php echo $barcode; ?></td>
                    <td style="font-size:12px"><?php echo $product; ?></td>
                    <td style="font-size:12px"><?php echo $mrp; ?></td>
                    <td style="font-size:12px"><?php echo $qty; ?> <?php echo $unit; ?></td>
                    <td style="font-size:12px"><?php echo $total; ?></td>
                    <td style="font-size:12px"><a href="remove-item.php?id=<?php echo $sid; ?>" class="badge badge-danger">Remove</a></td>
                    </tr>
                  <?php endwhile; ?>
                  <tr>
                    <th style="font-size:12px"></th>
                    <th style="font-size:12px"></th>
                    <th style="font-size:12px"></th>
                    <th style="font-size:12px"></th>
                    <th style="font-size:12px"></th>
                    <th style="font-size:12px;text-align:right">NET TOTAL</th>
                    <th style="font-size:14px"><?php echo $NET?></th>
                    <th style="font-size:12px"><span class="btn btn-success">PG CONNECTION</span></th>
                  </tr>
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
  <script>
function goBack() {
  window.history.go(-1);
}
</script>
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