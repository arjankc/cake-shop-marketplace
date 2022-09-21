
<?php
session_start();
include 'repository.php';
include 'repositoryImpl.php';
include 'UserDao.php';
if ((isset($_POST["username"]) || !empty($_POST["username"])) && (isset($_POST["firstname"]) || !empty($_POST["firstname"]))) {
    $bakery = new BakeryImpl();
    $uname = $_POST['username'];
    $address = $_POST['address'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $contactNumber=$_POST['contactNumber'];
    if (!empty($_FILES['image']['name'])) {
        $uploaddir = 'assets/uploads/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
    }
    $credential = new UserDao();
    $credential->setUsername($uname);
    $credential->setFirstName($fname);
    $credential->setLastName($lname);
    $credential->setAddress($address);
    $credential->setImage($uploadfile);
    $credential->setContactNumber($contactNumber);
    $bakery->saveUserDetails($credential);
}
?>