
<html>

<head>
    <?php
    include 'navbar.php';
    ?>
    <link rel="stylesheet" href="assets\css\order.css">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    $id = (int)$_REQUEST['id'];
    require_once 'DatabaseConnection.php';
    $con = new DatabaseConnection();
    $conn = $con->getConnection();
    $sql = "SELECT * from product where id=$id";
    $result = $conn->query($sql);
    $img = "";
    $product_name = "";
    $price = "";
    $shop_name = "";
    if ($result->num_rows > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            $img = $data["image"];
            $product_name = $data['product_name'];
            $price = $data['price'];
            $shop_name = $data['shop_name'];
        }
    }
    ?>
    <div class="order-page">
        <div class="container">
            <div class="row justify-content-md-center   ">
                <div class="col-md-5">
                    <div class="cards">
                        <img src="<?= $img; ?>">
                    </div>
                </div>
                <div class="col-md-5">
                    <form action="OrderProduct.php?pid=<?= $id; ?>" method="POST" name="Form" onsubmit="return validateForm()">
                        <div class="details1">
                            <div class="order-info">
                                <p>
                                    <span>Product Name : </span><?= $product_name; ?>
                                </p>
                                <p>
                                    <span>Shop Name :</span> <?= $shop_name; ?>
                                </P>
                                <p>
                                    <span> Name on Cake:</span>
                                    <input type="text" name="cname" id="cname" class="form-control">
                                </p>
                                <p>
                                    <span>Quantity:</span>
                                    <input type="number" max=10 min=1 name="Quantity" id="Quantity" class="form-control">
                                </p>
                                 <p>
                                    <span> Weight:</span>
                                    <input type="number" max=5 min=1 name="Weight" id="Weight" class="form-control">
                                </p>
                                <p>
                               <span> Contact Number</span>
                                <input type="text" name="Contact" id="Contact" class="form-control">
                                </p>
                                <p>
                                    <span> Delivery Date:</span>
                                    <input type="date" name="date" id="date" class="form-control">
                                </p>
                                 <p>
                                    <span> Delivery place:</span>
                                    <input type="text" name="address" id="address" class="form-control">
                                </p>
                                <span>Occassion :</span>
                        <select name="occassion"  style="width: 200px;">
                            <option>Birthday</option>
                            <option>Anniversary</option>
                            <option>Marriage</option> 
                            <option>Baby Shower</option>
                            <option>Non occasional</option>
                        </select>
                        </p>
                           <p>
                                    <span>Price of cake:</span> <?= $price; ?>
                                </p>

                            </div>
                            <div class="stock-label">
                                Available: In Stock
                            </div>
                            <div class="btn-block">
                                <button type="submit" value="submit"> Order Now</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_GET["submitted"])) {
                        echo "<scrip>alert('Cake successfully ordered')</script>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    </div>
    <script type="text/javascript">
        function validateForm() {
        let cname = document.forms["Form"]["cname"].value;
          let Quantity = document.forms["Form"]["Quantity"].value;
          let Weight = document.forms["Form"]["Weight"].value;
          let Contact = document.forms["Form"]["Contact"].value;
          let date = document.forms["Form"]["date"].value;
          let address = document.forms["Form"]["address"].value;
    if (cname == "") {
      alert("Name on cake field must be filled out");
      return false;
    }
    if (Quantity == "") {
      alert("Quantity field must be filled out");
      return false;
    }
    if (Weight == "") {
      alert("Weight field must be filled out");
      return false;
    }
    if (Contact == "") {
      alert("Contact field must be filled out");
      return false;
    }
    if (isNaN(Contact))  {
      alert("Contact cannot be cannot be a letter");
      return false;
  }
  if (Contact.length!=10)  {
      alert("Contact must have 10 digits");
      return false;
  }
  if (date == "") {
      alert("Delivery date must be select");
      return false;
    }
    if (address == "") {
      alert("Delivery place must be filled out");
      return false;
    }
        }
        </script>
</body>

</html>