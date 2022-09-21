<html>

<head>
    <?php include 'navbar.php' ?>
    <link rel="stylesheet" href="assets\css\sidebar.css">
    <title>
    </title>
</head>

<body>
    <div class="main-body">
        <div class="container">
            <div class="side-nav">
                <a href="#" class="logo">
                    <img src="assets\img\d.jpg" class="logo-img">
                </a>

                <ul class="nav-links">
                    <H2> Categories</H2>
                    <li><a href="product.php?productName=Black Forest">

                            <p>Black Forest</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Blue berry">

                            <p>Blue berry</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Butterscotch">

                            <p>Butterscotch</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Cheese cake">

                            <p>Cheese cake</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Strawberry">
                            <p>Strawberry</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Fresh fruit">
                            <p>Fresh fruit</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Floral cake">

                            <p>Floral cake</p>
                        </a>
                    </li>

                    <div class="active"></div>
                </ul>
            </div>

            <div class="body-container">
                <div class="row">
                    <?php require_once 'DatabaseConnection.php';
                    $productName = $_REQUEST['productName'];
                    $con = new DatabaseConnection();
                    $conn = $con->getConnection();
                    $sql = "SELECT * from product where product_name='$productName' and valid_product='accepted'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($data = mysqli_fetch_assoc($result)) {
                           
                    ?>
                            <div class="column">
                                <div class="card">
                                <a href="Order.php?id=<?= $data['id']; ?>">
                                        <img src="<?= $data['image']; ?>">
                                    </a>
                                    <p><?= $data['product_name'] ?></p>
                                    <p class="price" style="color: red;"> RS.<?= $data['price'] ?></p>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <?php if ($result->num_rows == 0) { ?>
                        <p> Cake is not available
                        </p>
                    <?php
                    }
                    ?>


                </div>

            </div>
        </div>
    </div>

    </div>

</body>

</html>