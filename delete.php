<?php
include 'DatabaseConnection.php';
$id = (int)$_REQUEST['id'];
$con = new DatabaseConnection();
$conn = $con->getConnection();
$sql_s = "DELETE FROM product where id=$id";
if (mysqli_query($conn, $sql_s)) {
    header('Location: productDetails.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
