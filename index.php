<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");

}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hiiiii</h1>
    <a href="logout.php" class= "btn btn-warning">logout</a>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Website</title>

    <!-- website icon part -->
    <link rel="website icon" type="png" href="../image/website_logo.png">

    <!-- font awsome cdn part -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css for index.html -->
    <link rel="stylesheet" href="./HOME/style.css">

</head>

<body>
    <!-- header section -->
    <header class="header">
        <a href="./HOME/home.php" title="website logo" class="logo"><img class="web_lg" src="./image/website_logo.png"
                alt="error to load"></a>

        <!-- navbar section -->
        <nav class="navbar">
            <a href="./HOME/home.php">Home</a>
            <a href="./ABOUT/about.php">About</a>
            <a href="./SERVICE/service.php">Service</a>
            <a href="./CROPS/crops.php">Crops</a>
            <a href="./FERTILIZER/fertilizer.php">Fertilizer</a>
            <a href="./LAWS/laws.php">Laws/Rules</a>
            <a href="./REVIEWS/reviews.php">Reviews</a>
            <a href="./CONTACT/contact.php">Contact Us</a>
        </nav>

        <!-- navbar icon section -->
        <div class="icons">
            <div class="fa fa-bars" title="menu button" id="menu-btn"></div>
            <div class="fa fa-search" title="search button" id="search-btn"></div>
            <div class="fa fa-shopping-cart" title="cart button" id="cart-btn"></div>
            <a style="height: 4.2rem;
            width: 4.2rem;
            border: 1px solid;
            line-height: 4.2rem;
            border-radius: .5rem;
            background: #e8e6e6;
            color: var(--black);
            font-size: 2rem;
            margin-right: .4rem;
            text-align: center;
            border: none;" href="logout.php" class="fa fa-sign-out logout" title="logout button" id="login-btn"></a>
            <!-- <div class="fa fa-sun-o" title="black/white button" id="black/white"></div> -->
        </div>

        <!-- search form section -->
        <form class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fa fa-search"></label>
        </form>

        <!-- add to cart section -->
        <div class="shopping-cart">
            <div class="box">
                <i class="fa fa-trash"></i>
                <img class="img" src="../image/image_c_1.png" alt="error to load image">
                <div class="content">
                    <h3>Rice</h3>
                    <span class="price">Rs. 135/-</span>
                    <span class="quantity">Qty : 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fa fa-trash"></i>
                <img class="img" src="../image/image_c_2.png" alt="error to load image">
                <div class="content">
                    <h3>Tomatto</h3>
                    <span class="price">Rs. 185/-</span>
                    <span class="quantity">Qty : 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fa fa-trash"></i>
                <img class="img" src="../image/image_c_3.png" alt="error to load image">
                <div class="content">
                    <h3>Papaya</h3>
                    <span class="price">Rs. 235/-</span>
                    <span class="quantity">Qty : 1</span>
                </div>
            </div>

            <div class="total">Total : 555 Rs./- </div>
            <a href="#" class="btn-1">Re-Check & Order</a>
        </div>


    </header> 

    <section>
        <!-- banner section -->
        <section class="home" id="home">
            <div class="content">
                <h3>WELLCOME....</h3>
                <h3>This is Our <span>Agricultural Website....</span></h3>
                <p>
                    Welcome to our Agriculture Hub, your go-to resource for all things related to farming,
                    sustainability, and food production. Our homepage is designed to connect farmers, agronomists, and
                    enthusiasts with the latest industry news, innovative practices, and expert insights. Explore our
                    comprehensive articles on crop management, livestock care, and sustainable farming techniques, all
                    aimed at promoting a healthier planet and thriving agricultural communities. Join our vibrant
                    community through forums and webinars, where you can share experiences, ask questions, and learn
                    from fellow agricultural professionals. Whether you're a seasoned farmer or just starting your
                    journey, our website is here to support you every step of the way. Dive in and discover the future
                    of agriculture!
                </p>

                <a href="../ABOUT/about.php" class="btn-2">Explore Us <i class="fa fa-hand-o-right"></i></a>
            </div>
        </section>

        <!-- dialogue section -->
        <section class="dialogue">
            <div class="dg">
                <p>“Learn everything that is good from others, but bring it in, and in your own way adsorb it; do not
                    become others.” "Comfort is no test of truth. Truth is often far from being comfortable." "Do one
                    thing at a Time, and while doing it put your whole Soul into it to the exclusion of all else."</p>
                <p class="auth">- Swami Vivekananda</p>
            </div>
        </section>

    </section>



    <!-- footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <a href="../HOME/home.php" title="website logo" class="logo"><img class="web_lg"
                        src="../image/website_logo.png" alt="error to load"></a>
                <p>Thank you for visiting our Agriculture Hub! At the footer of our website, you'll find essential links
                    to our privacy policy, terms of service, and contact information. Stay connected with us through our
                    social media channels for the latest updates, tips, and community stories. We value your feedback,
                    so feel free to reach out with any questions or suggestions. Together, let's cultivate a sustainable
                    future for agriculture!</p>

                <div class="media">
                    <a href="#" title="facebook icon" class="fa fa-facebook"></a>
                    <a href="#" title="twitter icon" class="fa fa-twitter"></a>
                    <a href="#" title="instagram icon" class="fa fa-instagram"></a>
                    <a href="#" title="linkedin icon" class="fa fa-linkedin"></a>
                </div>

            </div>


            <div class="box">
                <h3>contact us</h3>

                <a href="#" class="links"><i class="fa fa-phone"></i>+91 9999999999</a>
                <a href="#" class="links"><i class="fa fa-phone"></i>+91 8888888888</a>
                <a href="#" class="links"><i class="fa fa-envelope"></i>example@gmail.com</a>
                <a href="https://www.brainwareuniversity.ac.in/" class="links"><i class="fa fa-map-marker"></i>Barasat,
                    West Bengal- 700125</a>

            </div>


            <div class="box">
                <h3>quick links</h3>

                <a href="../HOME/home.php" class="links"><i class="fa fa-long-arrow-right"></i>Home</a>
                <a href="../ABOUT/about.php" class="links"><i class="fa fa-long-arrow-right"></i>About</a>
                <a href="../SERVICE/service.php" class="links"><i class="fa fa-long-arrow-right"></i>Service</a>
                <a href="../CROPS/crops.php" class="links"><i class="fa fa-long-arrow-right"></i>Crops</a>
                <a href="../FERTILIZER/fertilizer.php" class="links"><i class="fa fa-long-arrow-right"></i>Fertilizer</a>
                <a href="../LAWS/laws.php" class="links"><i class="fa fa-long-arrow-right"></i>Laws/Rules</a>
                <a href="../REVIEWS/reviews.php" class="links"><i class="fa fa-long-arrow-right"></i>Reviwes</a>
                <a href="../CONTACT/contact.php" class="links"><i class="fa fa-long-arrow-right"></i>Contact us</a>

            </div>

            <div class="box">
                <h3>download apk</h3>
                <a href="#" class="btn-1 d-btn"> Download <i class="fa fa-download"></i></a>
            </div>
        </div>

        <div class="copyright">
            Created by <span>KRISHI CULTURE</span> | © All Rights Reserved - 2024.
        </div>
    </section>




    <!-- main js for all -->
    <script src="script.js"></script>


</body>

</html>
