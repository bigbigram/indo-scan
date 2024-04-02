<?php
include("db.php");
include('session.php');
date_default_timezone_set('Asia/Thimphu');
$Curdate = date('Y-m-d');
$query1 = mysqli_query($db,"select * from user where phone = '$login_session' ");
$row = mysqli_fetch_array($query1,MYSQLI_ASSOC);
$uid=$row["id"];
$name=$row["name"];
$branch=$row["branch"];

$sql = mysqli_query($db,"select * from endpoint where  branch = '$branch' ");
$rows= mysqli_fetch_array($sql,MYSQLI_ASSOC);
$url=$rows["url"];

$id=$_GET['id'];
$sid=$_GET['sid'];
  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,''.$url.'/scan/item-details.php?id='.$id.'');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
  $buffer = curl_exec($curl_handle);
  curl_close($curl_handle);
  if (empty($buffer)){
      echo '<script language="javascript">';
      echo 'window.location.href="error-connection.php";';
      echo '</script>';
  }
  else{
      print $buffer;
  }
  
  if($_SERVER["REQUEST_METHOD"] == "POST")
{
$barcode=$_POST['barcode'];
$product=$_POST['product'];
$mrp=$_POST['mrp'];
$qty=$_POST['qty'];
$unit=$_POST['unit'];
$total=$_POST['total'];
$data = mysqli_query($db,"insert into itemSale (vDocNo,uid,cashier,branch,barcode,product,mrp,qty,unit,total,date) 
                     values ('$sid','$uid','$name','$branch','$barcode','$product','$mrp','$qty','$unit','$total','$Curdate')");

if ($data) {

        echo '<script language="javascript">';
        echo 'window.location.href="add-more-sale.php?randomNumber=' . $sid . '";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
       echo 'window.location.href="error-insert.php";';
        echo '</script>';
    }
}
?>
<script>
    function showSubmittingMessage() {
        var button = document.getElementById("submitButton");
        button.value = "Please wait, Adding to Cart...";
        button.disabled = true;
        return true; // allow the form to submit
    }
</script>