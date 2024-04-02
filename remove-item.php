<?php
include('db.php');
include('session.php');
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($db, $_GET['id']);
    $strSQL3 = mysqli_query($db, "DELETE FROM itemSale WHERE id='$id'");

    if ($strSQL3) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Error: " . mysqli_error($db);
    }
} else {
    header("Location: cart-item.php");
    exit;
}
?>
