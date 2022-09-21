<html>

<body>

    <head>
        <link rel="stylesheet" href="assets\css\sidebar.css">
    </head>
    <div class="main-body">
        <div class="container">
            <div class="side-nav">
                <a href="#" class="logo">
                    <img src="assets\img\d.jpg" class="logo-img">
                </a>

                <ul class="nav-links">
                    <H2> Categories</H2>
                    <li><a href="product.php?productName=Black Forest">

                            <p>Black Forest</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Blue berry">

                            <p>Blue berry</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Butterscotch">

                            <p>Butterscotch</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Cheese cake">

                            <p>Cheese cake</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Strawberry">
                            <p>Strawberry</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Fresh fruit">
                            <p>Fresh fruit</p>
                        </a>
                    </li>
                    <li><a href="product.php?productName=Floral cake">

                            <p>Floral cake</p>
                        </a>
                    </li>

                    <div class="active"></div>
                </ul>
            </div>

            <div class="body-container">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="assets\img\cake1.jpg">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="assets\img\cake2.jpg">

                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="assets\img\bento cake.jpg">
                    </div>
                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>



        <div class="row">
            <?php require_once 'DatabaseConnection.php';
            $con = new DatabaseConnection();
            $conn = $con->getConnection();
            $sql = "SELECT * from product where valid_product='accepted'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($data = mysqli_fetch_assoc($result)) {

                    
            ?>
                    <div class="column">
                        <div class="card">
                        <a href="Order.php?id=<?= $data['id']; ?>">
                                <img src="<?= $data['image']; ?>">
                            </a>
                            <p><?= $data['product_name'] ?></p>
                            <p class="price" style="color: red;">RS <?= $data['price'] ?></p>

                        </div>
                    </div>
            <?php }
            } ?>
        </div>

        <div class="row">
            <div class="faculties">
                <div class="text-card">

                    <h1>The Bakery corner</h1>
                    <p>Do you know the secret to make celebrations extraordinary? Well, it’s cakes from THE BAKERY CORNER - we deliver sweetness here But, what is so special about THE BAKERY CORNER cakes that makes them a celebration showstopper? Freshness and taste are the USP of our cakes that make every celebration extraordinary. You can place ORDER Of lip-smacking cakes in flavours such as chocolate, black forest, coffee, Kitkat, red velvet, butterscotch, fruit, vanilla, strawberry, and pineapple. You can buy cake-types such as heart-shaped cake, eggless cake, vegan cake. We bake eggless without eggs and vegan with plant-based ingredients. Order cake right now and enjoy baked sweetness!
                        <br><br>
                        At Your The Bakery corner, we bake amazing high-quality and tasty cakes in Nepal. We are the best at our service. Always Remember THE BAKERY CORNER for any occasion. You can visit us and get to do in-house online cake shopping in Banepa.
                        <br><br>
                        <!--
For you: About Us | Customer Support | Terms and Conditions |Blogs
Cake Flavors Available: Blackforest Cakes in Nepal | Cup Cake at Best Price in Banepa | Send Cakes to Banepa | Tiramisu Cakes in Banepa
<br>-->
                    </p>
                </div>


                <div class="text-card">
                    <h1>Get Cake Online in Banepa to celebrate special moments with THE BAKERY CORNER</h1>
                    <p>Celebrate every moment in your life that matters dearly to your loved ones with cakes from THE BAKERY CORNER.we are here to help you navigate sweetness into each of your relationships. Be it an annual celebration like birthdays, anniversaries and common holidays, you can buy cakes online that are freshly baked with top-quality ingredients. Give your friends and family surprises right at their doorstep with our flawless and smooth delivery services from our online bakery.we are here for your service .<br>
                        <!--<br>it is so easy to order cake online from THE BAKERY CORNER. Now no matter how big or small the function is, no matter where you are present, connecting with your dear ones is easy with our competitively priced cakes and desserts! And if you have been looking for the fastest cake delivery near me,  what are you waiting for? Order cake online by visiting our website.-->
                        <br> <br>Your The Bakery corner is #1 online cake delivery portal in Banepa delivering the finest cakes in the City. We must say, you are in the best place which has an online facility to order the finest cakes for Banepa, Dhulikhel, Panauti and Nala.
                    </p>
                </div>

                <div class="text-card">
                    <h1>Cakes in Banepa</h1>
                    <p>THE BAKERY CORNER Online Cake Delivery offers you a huge range of cakes baked with utmost perfection and the finest quality of ingredients. Cakes available in our bakery are always fresh, soft, moist, mushy, and fluffy in texture. We have flavorsome cakes in nepal to illuminate your every occasion. <br>
                        <br>Be it a birthday, wedding, anniversary, Valentine’s Day, Mother’s day, or any other event, our cakes will never disappoint you.
                        <br><br>
                        We have the best quality of cakes which are bound to add to the sweetness of the relations. Some of the best cakes and most delectable cake that we offer are Chocolate Truffle Cake, Palpable Black Forest Cake, Choco-Walnut Delight, Sinful Chocolate Truffle, Lipsmacking Butterscotch Cake, Red Velvet Cake, Blueberry Vanilla , Strawberry Cake, Cherry on the Black Forest, Red Velvet And Fruity Delight, and many more.
                        <!-- For more such yummylicious treats, visit our website and order a delicious cake online from THE BAKERY CORNER and enjoy a same day cake delivery in banepa</p>-->
                </div>

                <div class="text-card">
                    <h1>What Feature Makes THE BAKERY CORNER best Cake store?</h1>
                    <ul>
                        <li>Wide variety of cakes online to choose from. Variety of designs and flavours</li>
                        <li>Cakes for every preference; eggless, vegan, non-eggless</li>
                        <li>Quality ingredients</li>
                        <li>Cakes for birthdays, anniversaries, wedding Day, and other events</li>
                        <li>Online cake delivery banepa: free delivery, same-day delivery, fixed time delivery </li>
                        <li>Affordable Custom Cakes</li>
                    </ul><br>
                    <b>
                        Our mission is try to provide the best-quality cakes at affordable prices on time you desire. 
                    </b>
                </div>
                <div class="text-card">
                        <h1> Frequently Asked Questions About Online Cake Delivery</h1>
                             <ol>
                                 <li>Which type of cake is best for a birthday?</li>
                                    <p> Ans. A personalised cake like a photo cake, designer cake, and theme cakes are best for birthdays.</p>
                               <br> <li> What's the cake delivery process?</li>
                                    <p>Ans. To get a cake delivered at your doorstep, visit The Bakery Corner website, create or login to your account, select the cake along with its size and flavour, fill all the billing and shipping address details and make the payment online.</p>
                                <br> <li> What is the most popular Flavour of cake?</li>
                                     <p> Ans. Some of the best flavours of cakes include options like Black Forest Cake, Kit Kat Cake, Blueberry Cake, Chocolate Mud Cake and many more.</p>
                                <br><li>What if the recipient is not available when the delivery person reaches there? Will you re-attempt delivery?</li>
                                    <p> Ans. Yes, will surely coordinate with you related to the timings of the re-attempt of the delivery.</p>
                         </div>

                <div class="text-card">
                <h1 font size>How to Pay? What payments do we accept?</h1>
                    <p>There are lot of bakeries that are associated with us so we prefer handcash only.</p>
                    <br><br>
                    <h1>Bakery:</h1>
                    <p> There will be a lot of bakeries that will be attached to our online bakery system which will make delicious cakes. Those bakeries need to be registered into the system. After getting the notification from the accountant the bakery can deliver the cake to the address given. It will manage the cakes it has, the cakes which are out of stock, the cakes which are in higher demand, etc.
                    </p><br>
                </div>
            </div>
            <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
            </script>

</body>

</html>