<html>

<head>
    <?php include 'navbar.php' ?>
    <link rel="stylesheet" href="assets\css\sidebar.css">
    <link rel="stylesheet" href="assets\css\profile.css">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="assets\css\userdetails.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="main">
        <div class="user-card">
            <?php
            require_once 'DatabaseConnection.php';
            $con = new DatabaseConnection();
            $conn = $con->getConnection();
            $uname = $_SESSION["username"];
            $sql = "SELECT * from signup where username='$uname'";
            $result = $conn->query($sql);
            $img = "";
            $id = 0;
            if ($result->num_rows > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    $img = $data["image"];
                }
            }

            $sqlQuery = "select * from orders where vendor_name='$uname'";
            $results = $conn->query($sqlQuery);
            ?>
            <a href="#" class="logo">
                <?php if (!$img) : ?>
                    <img src="assets/img/boy.jpg" class="logo-img">
                <?php else : ?>
                    <img src="<?= $img; ?>" class="logo-img">
                <?php endif ?>
            </a>

            <ul class="nav-links">
                <H2> My Account</H2>
                <li><a href="UserDashboard.php">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li><a href="OrderDetails.php">
                        <p>Orders</p>
                    </a>
                </li>
                <li><a href="UserDetails.php">
                        <p>Account Details</p>
                    </a>
                </li>
                <li><a href="AddProduct.php">
                        <p>Add Product</p>
                    </a>
                </li>


                <?php if ($uname == 'admin') : ?>
                    <li><a href="ProductDetails.php">
                            <p>Product Details</p>
                        </a>
                    </li>
                <?php endif ?>
                <li><a href="logout.php">
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="profile-row">
            <p class="profile-info"><?php
                                    echo "Hello " . $_SESSION["username"];
                                    ?>
            </P>
            <p class="profile-info"> From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details.</p>
            <?php
            if ($results->num_rows > 0) { ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th> Shop Name </th>
                        <th> Delivery Address </th>
                        <th> Image</th>
                        <th> Price </th>
                        <th>Quantity</th>
                        <th>Weight</th>
                        <th>Contact Number</th>
                        <th> Name on Cake </th>
                        <th>Delivery date</th>
                        
                    </tr>

                    <?php

                    while ($data = mysqli_fetch_assoc($results)) {
                        $id++;
                    ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $data['product_name']; ?></td>
                            <td><?php echo $data['shop_name']; ?></td>
                            <td><?php echo $data['delivery_address']; ?></td>
                            <td><img src="<?= $data['images']; ?>" height="50" width="50"></td>
                            <td><?php echo $data['price']; ?></td>
                            <td><?php echo $data['Quantity']; ?></td>
                            <td><?php echo $data['Weight']; ?></td>
                            <td><?php echo $data['Contact']; ?></td>
                            <td><?php echo $data['name_on_cake']; ?></td>
                            <td><?php echo $data['delivery_date']; ?></td>
                        </tr>
                    <?php
                    } ?>

                </table>
            <?php
            } else {
            ?>
                <h2> No order placed</h2>
            <?php

            }
            ?>


        </div>
    </div>
    </div>
    </div>
</body>

</html>