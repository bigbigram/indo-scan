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
?>
<div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
  <!-- Close button-->
  <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  <!-- Offcanvas body-->
  <div class="offcanvas-body">
    <!-- Sidenav Profile-->
    <div class="sidenav-profile">
      <div class="user-profile"><img src="<?php echo $profilepic?>" alt=""></div>
      <div class="user-info">
        <h5 class="user-name mb-1 text-white"><?php echo $Name?></h5>
        <p class="available-balance text-white"><span><?php echo $Branch ?></span></p>
      </div>
    </div>
    <!-- Sidenav Nav-->
    <ul class="sidenav-nav ps-0">
      <li><a href="profile.php"><i class="fa-solid fa-user"></i>My Profile</a></li>
      <li class="suha-dropdown-menu"><a href="#"><i class="fa-solid fa-store"></i>Action Menu</a>
        <ul>
          <li><a href="scan.php">Scanner</a></li>
          <li><a href="stock-transfer.php">Stock Transfer</a></li>
          <li><a href="add-purchase-bill.php">Add Purchase Bill</a></li>
        </ul>
      </li>
      <!--li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="fa-solid fa-heart"></i>My Work History</a>
        <ul>
          <li><a href="stock-count-list.php">Stock Count List</a></li>
          <li><a href="purchase-order.php">Purchase List</a></li>
          <li><a href="pending-purchase-bill.php">Pending Bill List</a></li>
          <li><a href="expire-item.php">Expire List</a></li>
          <li><a href="over-stock.php">Over Stock List</a></li>
          <li><a href="requisition-list.php">Requisition List</a></li>
        </ul>
      </li-->
      <li><a href="setting.php"><i class="fa-solid fa-sliders"></i>Settings</a></li>
      <li><a href="logout.php"><i class="fa-solid fa-toggle-off"></i>Sign Out</a></li>
    </ul>
  </div>
</div>