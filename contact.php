<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets\css\contact.css">
   <?php
    session_start();
    session_destroy();
    include 'navbar.php';
    ?>
   </head>
<body>
<?php
require_once 'DatabaseConnection.php';
$con = new DatabaseConnection();
$conn = $con->getConnection();
$sql = "SELECT * from signup";
$result = $conn->query($sql);
$id = 0;
if ($result->num_rows > 0) { 
  
  ?>

  <div class="contact_container">
  <p> Contact list of vendors</p>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Owner Name</th>
      <th scope="col"> Shop Address</th>
      <th scope="col"> Contact Number</th>
      <th scope="col">Email</th>
      <th scope="col">Shop Name</th>
      
     
    </tr>
  </thead>
  
  <?php

    while ($data = mysqli_fetch_assoc($result)) { 
      $id++;
      $shopName="";
      $uname=$data['username'];
      ?>
        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $data['first_name']." ".$data['last_name']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                            <td><?php echo $data['contactNumber']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                          
                            <?php
                            $sqll="SELECT shop_name from product where vendor_name='$uname'";
                            $result1 = $conn->query($sqll);
                            if ($result1->num_rows > 0) {
                            while($data= mysqli_fetch_assoc($result1)){
                            $shopName=$data['shop_name'];
                            }
                          }
                         
                            ?>
                             <td> <?php echo $shopName; ?> </td>
                            

                        </tr>

                  <?php } ?>


                        </table>
                        </div>

                        <?php
    
                        }

?>

    </body>
</html>
        