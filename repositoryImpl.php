<?php
include 'DatabaseConnection.php';
class BakeryImpl implements Bakery
{
    public function signUp(LoginDao $login)
    {
        $uname = $login->getUsername();
        $pass = $login->getPassword();
        $email = $login->getEmail();
        $repassword = $login->getRepassword();
        $con = new DatabaseConnection();
        $conn = $con->getConnection();
        $sql = "INSERT INTO signup (username,email,password,repassword)VALUES('$uname','$email','$pass','$repassword')";
        if (mysqli_query($conn, $sql)) {
            header('Location: Login.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    public function getCredential(LoginDao $login)
    {
        $isLogin = false;
        $uname = $login->getUsername();
        $pass = $login->getPassword();
        $con = new DatabaseConnection();
        $conn = $con->getConnection();
        $sql = "SELECT * FROM signup WHERE username='$uname' and password='$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $isLogin = true;
        }
        return $isLogin;
    }

    public function saveUserDetails(UserDao $user)
    {
        $uname = $user->getUsername();
        $fname = $user->getFirstName();
        $lname = $user->getlastName();
        $address = $user->getAddress();
        $image = $user->getImage();
        $contactNumber=$user->getContactNumber();
        $con = new DatabaseConnection();
        $conn = $con->getConnection();
        $sql = "UPDATE signup SET first_name='$fname', last_name='$lname', address='$address', image='$image', username= '$uname', contactNumber='$contactNumber' WHERE username='$uname' ";
        if (mysqli_query($conn, $sql)) {
            header('Location: UserDashboard.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    public function addProducts(ProductDao $productDao)
    {
        $productName = $productDao->getProductName();
        $image = $productDao->getImage();
        $shopname = $productDao->getShopname();
        $price = $productDao->getPrice();
        $weight = $productDao->getWeight();
        $address = $productDao->getAddress();
        $vendorName = $productDao->getVendorName();
        $con = new DatabaseConnection();      // DataBaseConnection con= new DatabaseConnection();
        $conn = $con->getConnection();       // com.getConnection();
        $sql = "Insert into product(product_name,address,image,shop_name,price,weight,vendor_name,valid_product) values('$productName','$address','$image','$shopname',$price,'$weight','$vendorName','pending')";
        if (mysqli_query($conn, $sql)) {
            header('Location: UserDashboard.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
