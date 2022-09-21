<html>

<head>
    <?php include 'navbar.php' ?>
    <link rel="stylesheet" href="assets\css\profile.css">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="assets\css\userdetails.css">
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
                <li><a href="page2.html">
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

        <body>
            <section class="main1"></section>
            <main>


                <form action="ProductController.php" method="post" enctype="multipart/form-data">
                    <h1>Product Entry</h1>

                    <div>
                        <label for="productName">productName:</label>
                        <input type="text" name="productName" id="productName" required>
                    </div>
                    <div>
                        <input type="file" name="image" id="image">

                    </div>
                    <div>
                        <label>Shop Name:</label>
                        <input type="text" name="shopName" id="shopName" required>
                    </div>

                    <div>
                        <label>Address:</label>
                        <input type="text" name="address" id="address" required>
                    </div>
                    <div>
                        <label for="price">price:</label>
                        <input type="number" min="500" step="any" name="price" id="price" required>
                    </div>

                    <div>
                        <label>Weight:</label>
                        <select name="weight">
                            <option>1 pound</option>
                            <option>2 pound</option>
                            <option>3 pound</option>
                            <option>4 pound</option>
                        </select>
                        <div>
                        </div>

                        <input type="hidden" name="username" value='<?= $_SESSION["username"] ?>'>

                        <div class="save-changes">
                            <input type="submit" name="submit">
                        </div>
                    </div>
                </form>

            </main>
        </body>

</html>