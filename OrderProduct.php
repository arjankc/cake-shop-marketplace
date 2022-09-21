<html>

<head>
    <?php
    include 'navbar.php';

    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\order.css">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>
    <?php

    $id = (int)$_REQUEST['pid'];
    require_once 'DatabaseConnection.php';
    $date_of_delivery = $_POST['date'];
    $name_on_cake = $_POST['cname'];
    $delivery_address = $_POST['address'];
    $occassion=$_POST['occassion'];
    $Quantity=$_POST['Quantity'];
    $Weight=$_POST['Weight'];
    $ContactNumber=$_POST['Contact'];
    $con = new DatabaseConnection();
    $conn = $con->getConnection();
    $sql = "SELECT * from product where id=$id";
    $result = $conn->query($sql);
    $img = "";
    $product_name = "";
    $price = "";
    $shop_name = "";
    $vendor_name = "";
    if ($result->num_rows > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $img = $data["image"];
            $product_name = $data['product_name'];
            $price = $data['price'];
            $shop_name = $data['shop_name'];
            $vendor_name = $data['vendor_name'];
            
        }
    }
    $sqlQuery = "Insert into orders(product_name,shop_name,price,images,vendor_name,name_on_cake,delivery_date,delivery_address,occassion,Quantity,Weight,Contact) values('$product_name','$shop_name',$price,'$img','$vendor_name','$name_on_cake','$date_of_delivery','$delivery_address','$ocassion','$Quantity','$Weight','$ContactNumber')";
    if (mysqli_query($conn, $sqlQuery)) :
        header('Location: Order.php?submitted');
        exit;

    ?>

    <?php else : ?>

        <?php
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        ?>
    <?php endif ?>
</body>

</html>