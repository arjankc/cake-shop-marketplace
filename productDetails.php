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
            $fname = "";
            $lname = "";
            $address = "";
            if ($result->num_rows > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    $img = $data["image"];
                    $fname = $data["first_name"];
                    $lname = $data["last_name"];
                    $address = $data["address"];
                }
            }
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

            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th> Shop Name </th>
                    <th> Address </th>
                    <th> Image</th>
                    <th> Price </th>
                    <th> Weight </th>
                    <th>Status</th>
                    <th>Actions</th>

                </tr>

                <?php
                $sqlQuery = "select * from product";
                $results = $conn->query($sqlQuery);
                if ($results->num_rows > 0) {
                    while ($data = mysqli_fetch_assoc($results)) {

                ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['product_name']; ?></td>
                            <td><?php echo $data['shop_name']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                            <td><img src="<?= $data['image']; ?>" height="50" width="50"></td>
                            <td><?php echo $data['price']; ?></td>
                            <td><?php echo $data['weight']; ?></td>
                            <?php
                            if ($data['valid_product'] =="accepted") :
                            ?>
                                <td>Accepted</td>
                            <?php else : ?>
                                <td>Pending</th>
                                <?php
                            endif
                                ?>
                                <td>
                                    <?php
                                    if ($data['valid_product'] != 'accepted') {
                                    ?>
                                        <a href="Accept.php?id=<?= $data['id']; ?>"><button class="btn btn-success">Accept</button></a>
                                        <a href="delete.php?id=<?= $data['id']; ?>"><button class="btn btn-danger">Reject</button></a>

                                    <?php
                                    }
                                    ?>
                                </td>

                        </tr>
                <?php
                    }
                }
                ?>

            </table>


        </div>
    </div>
    </div>
    </div>
</body>

</html>