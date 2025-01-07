<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: ../login-register/login.php");

}
?>

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
    <link rel="stylesheet" href="../SERVICE/service.css">

</head>

<body>
    <!-- header section -->
    <header class="header">
        <a href="../HOME/home.php" title="website logo" class="logo"><img class="web_lg" src="../image/website_logo.png"
                alt="error to load"></a>

        <!-- navbar section -->
        <nav class="navbar">
            <a href="../HOME/home.php">Home</a>
            <a href="../ABOUT/about.php">About</a>
            <a href="../SERVICE/service.php">Service</a>
            <a href="../CROPS/crops.php">Crops</a>
            <a href="../FERTILIZER/fertilizer.php">Fertilizer</a>
            <a href="../LAWS/laws.php">Laws/Rules</a>
            <a href="../REVIEWS/reviews.php">Reviews</a>
            <a href="../CONTACT/contact.php">Contact Us</a>
        </nav>

        <!-- navbar icon section -->
        <div class="icons">
            <div class="fa fa-bars" title="menu button" id="menu-btn"></div>
            <div class="fa fa-search" title="search button" id="search-btn"></div>
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


    <!-- banner section -->
    <section class="home" id="home">
        <div class="content">
            <h3>Following These are our Services...</h3>
        </div>
    </section>


    <!-- Service section -->
    <section style="margin-top: 7rem;" class="service" id="service">
        <h1 class="heading">our <span>services</span></h1>

        <p style="font-size: 2.5rem; margin-bottom: 7rem;">
            The service page of an agriculture website serves as a vital hub for farmers, agribusinesses, and
            agricultural enthusiasts seeking comprehensive support and resources to enhance their productivity and
            sustainability. This page should clearly outline the diverse range of services offered, such as crop
            consulting, soil health assessments, pest management solutions, and precision farming technologies. By
            providing detailed descriptions of each service, including methodologies, expected outcomes, and case
            studies, the website can effectively communicate its expertise and commitment to advancing agricultural
            practices. Additionally, incorporating user-friendly features like service request forms, consultation
            scheduling, and educational resources—such as articles, webinars, and FAQs—can empower users to make
            informed decisions. Highlighting partnerships with research institutions, agricultural extension services,
            and technology providers can further establish credibility and demonstrate a collaborative approach to
            problem-solving in the agricultural sector. Ultimately, a well-structured service page not only informs
            visitors about available offerings but also fosters a sense of community and support, encouraging engagement
            and collaboration among stakeholders in the agricultural landscape.
        </p>

    </section>

    <section class="services">
        <div class="box-container">
            <div class="s-1">
                <img src="../SERVICE/service_image/s1.png" alt="error to load">
                <h3>Crop Consulting and Advisory Services</h3>
                <a href="../SERVICE/service_detials/s1/s1.html" class="btn-1">learn more</a>

            </div>

            <div class="s-1">
                <img src="../SERVICE/service_image/s2.png" alt="error to load">
                <h3>Soil Testing and Analysis</h3>
                <a href="../SERVICE/service_detials/s2/s2.html" class="btn-1">learn more</a>                

            </div>

            <div class="s-1">
                <img src="../SERVICE/service_image/S_3.png" alt="errorto load">
                <h3>Pest and Disease Management</h3>
                <a href="../SERVICE/service_detials/s3/s3.html" class="btn-1">learn more</a>

            </div>

            <div class="s-1">
                <img src="../SERVICE/service_image/s4.png" alt="errorto load">
                <h3>Market Analysis and Pricing Information</h3>
                <a href="../SERVICE/service_detials/s4/s4.html" class="btn-1">learn more</a>
                
            </div>

            <div class="s-1">
                <img src="../SERVICE/service_image/s5.png" alt="errorto load">
                <h3>Sustainable Farming Practices and Resources</h3>
                <a href="../SERVICE/service_detials/s5/s5.html" class="btn-1">learn more</a>
                
            </div>

            <div class="s-1">
                <img src="../SERVICE/service_image/s6.png" alt="error to load">
                <h3>Paddy Crops Farming procedure and Service</h3>
                <a href="../SERVICE/service_detials/s6/s6.html" class="btn-1">learn more</a>
                
            </div>
        </div>
    </section>


    <!-- buttons -->
    <div class="p-b">
        <a href="../ABOUT/about.php" class="btn-1 prev"><i class="fa fa-arrow-left"></i>Prev</a>
        <a href="../CROPS/crops.php" class="btn-1 next">Next<i class="fa fa-arrow-right"></i></a>
    </div>






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
    <script src="../SERVICE/service.js"></script>


</body>

</html>