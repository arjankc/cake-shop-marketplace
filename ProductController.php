<?php

include 'repository.php';
include 'repositoryImpl.php';
include 'productDao.php';
if ((isset($_POST["productName"]) || !empty($_POST["productName"])) && (isset($_POST["shopName"]) || !empty($_POST["shopName"]))) {


    $pName = $_POST['productName'];
    $shopName = $_POST['shopName'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    $weight = $_POST['weight'];
    $vendor_name = $_POST['username'];
    
    if (!empty($_FILES['image']['name'])) {
        $uploaddir = 'assets/uploads/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
    }

    $product = new ProductDao();
    // set all  values in object  named project
    $product->setProductName($pName);
    $product->setShopname($shopName);
    $product->setPrice($price);
    $product->setAddress($address);
    $product->setImage($uploadfile);
    $product->setWeight($weight);
    $product->setVendorName($vendor_name);
    $bakery = new BakeryImpl();
    // calling function
    $isLogin = $bakery->addProducts($product);
}
