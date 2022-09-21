<!DOCTYPE html>
<html>

<head>

    <meta charset="ISO-8859-1">
    <title>Login Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="assets\css\signup.css">
    <link rel="stylesheet" href="assets\css\navbar.css">
        
    

</head>

<body>
<div class="topnav">
            <div class="navitem">
                <a href="Dashboard.php">Home</a>
                <a href="about.php">About</a>
                <a href="contactus.php">Contact</a>
                <!-- <a href="contact.php">Vendor list</a> -->
            </div>
</div>
    <main>

        <form action="logincontroller.php" method="post" class="sign-up">
            <div class="sign-up-image">
                <img src="assets/img/sign.jpg">
            </div>
            <div class="form-block">
                <h1>Login</h1>
                <div class="content-block">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="content-block">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="content-block">
                    <button type="submit">Login</button>
                    <footer>Not a member? <a href="signup.php">Register here</a></footer>
                </div>
        </form>
    </main>

    <?php
    if (isset($_GET["error"])) {
        echo "<script>alert('Invalid credentials')</script>";
    }
    ?>
</body>

</html>