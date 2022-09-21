<html>

<head>
    <?php include 'navbar.php' ?>
    <link rel="stylesheet" href="assets\css\sidebar.css">
    <link rel="stylesheet" href="assets\css\profile.css">
</head>

<body>
    <div class="main">
        <div class="user-card">
            <?php

            require_once 'DatabaseConnection.php';
            $con = new DatabaseConnection();
            $conn = $con->getConnection();
            $uname = $_SESSION["username"];
            $sql = "SELECT image from signup where username='$uname'";
            $result = $conn->query($sql);
            $img = "";
            if ($result->num_rows > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    $img = $data["image"];
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
            <div class="profile-card-section">
                <div class="profile-card">
                    <a href="UserDashboard.php">
                        <img src="assets/img/dashboard1.jpg" />
                        <h1>Dashboard</h1>
                    </a>

                </div>
                <div class="profile-card">
                    <a href="OrderDetails.php">
                        <img src="assets/img/order.png" />
                        <h1>Orders</h1>
                    </a>

                </div>
                <div class="profile-card">
                    <a href="UserDetails.php">
                        <img src="assets/img/account.png" />
                        <h1>Account Details</h1>
                    </a>
                </div>
                
                <div class="profile-card">
                    <a href="logout.php">
                        <img src="assets/img/logout.png" />
                        <h1>Log out</h1>
                    </a>
                </div>
                <div class="profile-card">
                    <a href="addproduct.php">
                        <img src="assets/img/add.png" />
                        <h1>Add Product</h1>
                    </a>

                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>