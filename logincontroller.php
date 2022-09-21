
<?php
session_start();
include 'repository.php';
include 'repositoryImpl.php';
include 'LoginDao.php';

if ((isset($_POST["username"]) || !empty($_POST["username"])) && (isset($_POST["password"]) || !empty($_POST["password"]))) {
    $bakery = new BakeryImpl();
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $_SESSION["username"] = $uname;
    $credential = new LoginDao();
    $credential->setUsername($uname);
    $credential->setPassword($pass);
    $isLogin = $bakery->getCredential($credential);
    if ($isLogin == true) {
        header('Location: UserDashboard.php');
        exit;
    } else {
        header("Location: Login.php?error");
        exit;
    }
}
?>