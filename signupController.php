<?php
include 'repository.php';
include 'repositoryImpl.php';
include 'LoginDao.php';
$bakery = new BakeryImpl();
$uname = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$repass = $_POST['repassword'];
$credential = new LoginDao();
$credential->setUsername($uname);
$credential->setPassword($pass);
$credential->setEmail($email);
$credential->setRepassword($repass);
$bakery->signUp($credential);
