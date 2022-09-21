<html>

<body>

    <head>
        <link rel="stylesheet" href="assets\css\navbar.css">
        <link rel="stylesheet" href="assets\css\sidebar.css">
    </head>
    <div class="main-body">
        <div class="topnav">
            <div class="navitem">
                <a href="Dashboard.php">Home</a>
                <a href="about.php">About</a>
                <a href="contactus.php">Contact</a>
                <a href="contact.php">Vendor list</a>
            </div>
            <!-- <div class="SearchBar">
                <input type="text" placeholder="Search..">
            </div> -->
            <?php
            $uname = null;
            session_start();
            if (isset($_SESSION['username'])) {
                $uname = $_SESSION["username"];
            }
            if ($uname == null) {
            ?>
                <div class="login">
                    <a href="signup.php">Login/Register</a>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</body>

</html>