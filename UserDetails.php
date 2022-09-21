<html>

<head>
  <?php include 'navbar.php' ?>
  <link rel="stylesheet" href="assets\css\sidebar.css">
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
      $contactNumber="";
      if ($result->num_rows > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
          $img = $data["image"];
          $fname = $data["first_name"];
          $lname = $data["last_name"];
          $address = $data["address"];
          $contactNumber=$data['contactNumber'];
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
      <div class="user-details">
        <form action="UserDetailController.php" method="post" enctype="multipart/form-data" name="Form" onsubmit="return validate()">
          <div class="form-block">
            <h1>Account Details</h1>

            <div class="content-block">
              <label for="firstname">First Name:</label>
              <input type="text" name="firstname" id="firstname" value="<?= $fname; ?>">
            </div>
            <div class="content-block">
              <label for="lastname">Last Name:</label>
              <input type="text" name="lastname" id="lastname" value="<?= $lname; ?>" >
            </div>

            <div class="content-block">
              <label>Select Image File:</label>
              <input type="file" name="image">

            </div>

            <div class="content-block">
              <label for="username">Username:</label>
              <?php
              echo ' <input type="text" name="username" value="' . $_SESSION['username'] . '"></input>';
              ?>
            </div>

            <div class="content-block">
              <label for="address">Address:</label>
              <input type="text" name="address" id="address" value="<?= $address; ?>">
            </div>

            <div class="content-block">
              <label for="Contact Number">Contact Number:</label>
              <input type="text" name="contactNumber" id="contactNumber" value="<?= $contactNumber; ?>">
            </div>

            <div class="save-changes">
              <button type="submit">Save Changes</button>
            </div>
          </div>
        </form>
        <script type="text/javascript">
      function validate() {
        let fname = document.forms["Form"]["firstname"].value;
        let lname = document.forms["Form"]["lastname"].value;
          let username = document.forms["Form"]["username"].value;
          let address = document.forms["Form"]["address"].value;
          let contactnumber = document.forms["Form"]["contactNumber"].value;
          if (fname == "") {
      alert("first name must be filled out");
      return false;
    }
    if (fname.length<3)  {
      alert("first name must be 3 character");
      return false;
  }
  if (fname.length>20)  {
      alert("first name must be less than 20 character");
      return false;
  }
  if (lname == "") {
      alert("last name must be filled out");
      return false;
    }
  if (lname.length<3)  {
      alert("last name must be 3 character");
      return false;
  }
  if (lname.length>20)  {
      alert("last name must be less than 20 character");
      return false;
  }
  if (address == "") {
      alert("Address must be filled out");
      return false;
    }
    if (contactnumber == "") {
      alert("Contact number must be filled out");
      return false;
    }
    if (isNaN(contactnumber))  {
      alert("Contact number cannot contain alphabet");
      return false;
  }
  if (contactnumber.length>10)  {
      alert("Contact number must be less than 10 character");
      return false;
  }
  if (contactnumber.length<10)  {
      alert("Contact number must be greater than 10 character");
      return false;
  }
}
          </script>
      </div>

    </div>
  </div>
  </div>
  </div>
        </body>
</html>