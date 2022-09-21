<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <?php include 'navbar.php' ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="assets\css\profile.css">
  
    <style>
        .container{
          display : block;
            width :100%;

        }

        </style>
   </head>
<body>
<div class="contact-us">
  <h1 class="main-title">Contacts</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="contact-card">
                <a href="UserDashboard.php">
                    <img src="assets/img/address.png" />
                    <h1 class="contact-title">Address :</h1>
                    <p class="contact-content">Karuna Marg ,Tindobato-8 <br> Kavrepalanchwok, Bagmati,Nepal</p>
                </a>

            </div>
        </div>
        <div class="col-md-3">
            <div class="contact-card">
                <a href="OrderDetails.php">
                    <img src="assets/img/mail.png" />
                    <h1 class="contact-title">Email :</h1>
                     <p class="contact-content">TheBakeryCorner@gmail.com</p>
                </a>

            </div>
        </div>
        <div class="col-md-3">
            <div class="contact-card">
                <a href="UserDetails.php">
                    <img src="assets/img/phone.png" />
                    <h1 class="contact-title">Phone Number :</h1>
                     <p class="contact-content">+ 9779841000012 <br> (9:30 AM - 6:00 PM)</p>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="contact-card">S
                <a href="logout.php">
                    <img src="assets/img/workinghours.png" />
                    <h1 class="contact-title">Working hours of the online sales :</h1>
                     <p class="contact-content">9:00 AM - 7:00 PM <br> Sunday - Friday</p>
                </a>

            </div>
        </div>
    </div>

    <div class="reach">
        <h1 class="main-title">How to Reach Us?</h1>
        <p class="reach-content">We are located near Banepa hospital, Karuna Marga, Banepa-8, Kavrepalanchwok.</p>
        <!-- <img src=assets/img/location.png> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28277.6895183726!2d85.50674186121526!3d27.63346007112685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb0f33b1a23b53%3A0xe8ec0b92bdf38a54!2sBanepa!5e0!3m2!1sen!2snp!4v1661341932767!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
 <?php
  
    include 'footer.php';
    ?>
    </div>


   
    </body>
</html>
        