<html>
<?php
$id = (int)$_REQUEST['id'];
require_once 'DatabaseConnection.php';
$con = new DatabaseConnection();
$conn = $con->getConnection();
$sql = "UPDATE product SET valid_product='accepted' where id=$id";
if (mysqli_query($conn, $sql)) {
    header('Location: productDetails.php');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>

</html>