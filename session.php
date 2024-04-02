<?php
   include('db.php');
   if (!isset($_SESSION)) session_start();
   
   $user_check = $_SESSION['user'];
   
   $ses_sql = mysqli_query($db,"select 	Phone from user where Phone = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Phone'];
   
   if(!isset($_SESSION['user'])){
      header("location:index.php");
   }
?>