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
    <link rel="stylesheet" href="../ABOUT/about.css">

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
            <h3>Know More About Us...</h3>

        </div>
    </section>




    <!-- about section -->
    <section class="about" id="about">
        <h1 class="heading">our <span>about</span></h1>
        <div class="abt">
            <p>
                <b style="color: brown;">Welcome to our agriculture website</b><b>,</b> a dedicated platform designed to connect farmers, agronomists, and
                agricultural enthusiasts with the latest insights, resources, and innovations in the field of
                agriculture. Our mission is to empower individuals and communities by providing comprehensive
                information on sustainable farming practices, crop management, livestock care, and the latest
                technological advancements in the agricultural sector. We believe that agriculture is the backbone of
                our society, and through our website, we aim to foster a community that shares knowledge, experiences,
                and best practices. Our team consists of experienced agricultural professionals, researchers, and
                educators who are passionate about promoting sustainable farming and enhancing food security. We offer a
                wealth of resources, including articles, tutorials, and expert interviews, covering a wide range of
                topics from organic farming techniques to precision agriculture and climate-smart practices.
                Additionally, our platform features a vibrant forum where users can engage in discussions, ask
                questions, and share their own experiences, creating a collaborative environment for learning and
                growth. Whether you are a seasoned farmer looking to optimize your yield, a novice eager to learn the
                ropes, or simply someone interested in the future of food production, our website is your go-to resource
                for all things agriculture. Join us in our journey to cultivate knowledge, inspire innovation, and
                promote a sustainable future for agriculture worldwide.
            </p>
        </div>

    </section>

    <!-- members -->
     <section class="m">
        <h1 class="heading">meet <span>our member</span></h1>
        <div class="mem">
            <div class="person">
                <img src="../image/person-2.png" alt="error to load" class="r-s">
                    
                    <b style="color:maroon;" class="nam">
                        - Ayan Bhowmick
                        <br>
                        <span style="color:lavenderblush;
                        text-shadow: 0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32);
                    ">BWU/BCA/22/007</span>
                    </b>
                    <button class="btn-1">Download cv</button>
            </div>

            <div class="person">
                <img src="../image/person-2.png" alt="error to load" class="r-s">
                    
                    <b style="color:maroon;" class="nam">
                        - Nasrine Sultana
                        <br>
                        <span style="color:lavenderblush;
                        text-shadow: 0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32);
                    ">BWU/BCA/22/022</span>
                    </b>
                    <button class="btn-1">Download cv</button>
            </div>

            <div class="person">
                <img src="../image/person-2.png" alt="error to load" class="r-s">
                    
                    <b style="color:maroon;" class="nam">
                        - Avik Mondal
                        <br>
                        <span style="color:lavenderblush;
                        text-shadow: 0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32);
                    ">BWU/BCA/22/024</span>
                    </b>
                    <button class="btn-1">Download cv</button>
            </div>

            <div class="person">
                <img src="../image/person-2.png" alt="error to load" class="r-s">
                    
                    <b style="color:maroon;" class="nam">
                        - Ankita Mondal
                        <br>
                        <span style="color:lavenderblush;
                        text-shadow: 0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32);
                    ">BWU/BCA/22/021</span>
                    </b>
                    <button class="btn-1">Download cv</button>
            </div>

            <div class="person">
                <img src="../image/person-2.png" alt="error to load" class="r-s">
                    
                    <b style="color:maroon;" class="nam">
                        - Sruti Adhikary
                        <br>
                        <span style="color:lavenderblush;
                        text-shadow: 0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32),0px 0px 10px rgb(34, 32, 32);
                    ">BWU/BCA/22/045</span>
                    </b>
                    <button class="btn-1">Download cv</button>
            </div>
        </div>

     </section>


    <!-- buttons -->
    <div class="p-b">
        <a href="../HOME/home.php" class="btn-1 prev"><i class="fa fa-arrow-left"></i>Prev</a>
        <a href="../SERVICE/service.php" class="btn-1 next">Next<i class="fa fa-arrow-right"></i></a>
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
    <script src="../ABOUT/about.js"></script>


</body>

</html>