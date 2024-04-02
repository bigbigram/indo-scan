<?php
include("db.php");
session_start();
error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['username'];
    $pwd = $_POST['password'];
    $stmt = $db->prepare("SELECT * FROM user WHERE phone=? AND password=? AND status='1'");
    $stmt->bind_param("ss", $userid, $pwd);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user'] = $userid;
        header("location: home.php");
        exit();
    } else {
        $_SESSION['password'] = "Your Phone number or Password is Incorrect";
        header('location: login.php');
        exit();
    }
    $stmt->close();
}
?>
