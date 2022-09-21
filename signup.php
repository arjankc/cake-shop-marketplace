<!DOCTYPE html>
<html lang="en">

<head>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="assets\css\signup.css">
    <link rel="stylesheet" href="assets\css\navbar.css"> 
    <title>Register</title>
</head>

<body>
<div class="topnav">
            <div class="navitem">
                <a href="Dashboard.php">Home</a>
                <a href="about.php">About</a>
                <a href="contactus.php">Contact</a>
    
            </div>
</div>
    <main>
        <form action="signupController.php" method="post" class="sign-up" name="Form" onsubmit="return validateForm()">
            <div class="sign-up-image">
                <img src="assets/img/sign.jpg">
            </div>
            <div class="form-block">
                <h1>Sign Up</h1>
                <div class="content-block">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username">
                </div>
                <span id="message"></span>
                <div class="content-block">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" >
                </div>
                <span id="message"></span>
                <div class="content-block">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" >
                </div>
                <span id="message"></span>
                <div class="content-block">
                    <label for="repassword">Password Again:</label>
                    <input type="password" name="repassword" id="repassword" >
                </div>
                <span id="message"></span>
                <div class="content-block">
                    <label for="agree">
                        <input type="checkbox" name="agree" id="agree" value="yes" /> I agree
                        with the
                        <a href="#" title="term of services">term of services</a>
                    </label>
                </div>
                <button type="submit" value="submit">Register</button>
                <footer>Already a member? <a href="login.php">Login here</a></footer>
            </div>
        </form>
    </main>
    <script type="text/javascript">
      function validateForm() {
        let username = document.forms["Form"]["username"].value;
          let email = document.forms["Form"]["email"].value;
          let password = document.forms["Form"]["password"].value;
          let repassword = document.forms["Form"]["repassword"].value;
          if (username == "") {
      alert("Username must be filled out");
      return false;
    }
    if (!isNaN(username))  {
      alert("Username canot be taken as a number");
      return false;
  }
  if (username.length<3)  {
      alert("Username must be 3 character");
      return false;
  }
  if (username.length>20)  {
      alert("Username must be less than 20 character");
      return false;
  }
  if (email == "") {
      alert("email must be filled out");
      return false;
    }
  if (email.length>40)  {
      alert("Email cannot be more than 40 letter");
      return false;
  }
  if (email.indexOf('@')<=0)  {
      alert("@ should need in email address");
      return false;
  } 
  if (password == "") {
      alert("Password must be filled out");
      return false;
    }
  if (password.length<5)  {
      alert("Password cannot be less than 6 letter");
      return false;
  }
  if (password.length>15)  {
      alert("Password must be less than 15 character");
      return false;
  }
  if(password!=repassword){
    alert("Password are not same");
      return false;
  }
}
          </script>
</body>

</html>