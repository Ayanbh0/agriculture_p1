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
    <link rel="stylesheet" href="../LAWS/laws.css">

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
            <h3>The Law & Order section...</h3>
        </div>
    </section>

    <!-- the rules section -->

    <section class="r">
        <h1 class="heading">the <span>rules</span></h1>
        <div class="rules">
            <p>
            
            <b style="color:brown;">Soil Health:</b> Maintain and improve soil health through practices like crop rotation, cover cropping, and
                reduced tillage to enhance soil structure and fertility.
            
            </p>
            <br>

            <p>
            <b style="color:brown;">Water Management:</b> Use efficient irrigation techniques, such as drip irrigation, to conserve water and reduce waste while ensuring crops receive adequate moisture.
            
            </p>
            <br>

            <p>
            <b style="color:brown;">Biodiversity:</b> Promote biodiversity by planting a variety of crops and incorporating native plants to support ecosystems and reduce pest outbreaks.
            
            </p>
            <br>

            <p>
            <b style="color:brown;">Integrated Pest Management (IPM):</b> Implement IPM strategies that combine biological, cultural, physical, and chemical tools to manage pests sustainably and minimize chemical use.
            
            </p>
            <br>

            <p>
            <b style="color:brown;">Crop Rotation:</b> Rotate crops to prevent soil depletion, reduce pest and disease cycles, and improve soil fertility.
            </p>
            <br>

            <p>
            <b style="color:brown;">Sustainable Fertilization:</b> Use organic or slow-release fertilizers and soil amendments to enhance nutrient availability while minimizing environmental impact.
            </p>
            <br>

            <p>
            <b style="color:brown;">Conservation Tillage:</b> Reduce tillage to minimize soil erosion, improve water retention, and enhance soil organic matter.
            
            </p>
            <br>

            <p>
            <b style="color:brown;">Education and Training:</b> Continuously seek education and training opportunities to stay updated on best practices, technologies, and innovations in agriculture.
            </p>
            <br>

            <p>
            <b style="color:brown;">Pesticide Safety:</b> Follow safety guidelines for pesticide application to protect human health, beneficial organisms, and the environment.
            </p>
            <br>

            <p>
            <b style="color:brown;">Market Awareness:</b> Stay informed about market trends and consumer preferences to make informed decisions about crop selection and marketing strategies.
            
            </p>
            <br>

            <p>
            <b style="color:brown;">Waste Management:</b> Implement practices to reduce, reuse, and recycle agricultural waste, including composting organic matter to enrich soil.
            
            </p>
            <br>
        </div>
    </section>





    <!-- law & oreder section -->
    <section class="laws" id="laws">
        <h1 class="heading">the <span>laws</span></h1>
        <div class="law">
            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Federal Insecticide, Fungicide, and Rodenticide Act (FIFRA):</b> Regulates the use of pesticides to ensure they are safe for human health and the environment.
            
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Food Safety Modernization Act (FSMA):</b> Aims to ensure the U.S. food supply is safe by shifting the focus from responding to contamination to preventing it.
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Agricultural Adjustment Act (AAA):</b> Established in the 1930s, this law aimed to boost agricultural prices by reducing surpluses through production controls and subsidies.
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">National Environmental Policy Act (NEPA):</b> Requires federal agencies to assess the environmental effects of their proposed actions before making decisions, including those related to agriculture.
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Clean Water Act (CWA):</b> Regulates discharges of pollutants into U.S. waters and sets water quality standards, impacting agricultural runoff and water management practices.
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Clean Air Act (CAA):</b> Regulates air emissions from stationary and mobile sources, including agricultural operations, to protect air quality.
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Endangered Species Act (ESA):</b> Protects threatened and endangered species and their habitats, which can affect agricultural practices and land use.
            
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Fair Labor Standards Act (FLSA):</b> Establishes minimum wage, overtime pay, and child labor standards for agricultural workers.
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Farm Bill:</b> A comprehensive piece of legislation that covers various aspects of agricultural policy, including subsidies, nutrition assistance, and conservation programs.
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Organic Foods Production Act:</b> Establishes national standards for the production and handling of organic agricultural products.
            </p>
            <br>

            <p>
                <i class="fa fa-graduation-cap"></i>
            <b style="color: chartreuse;">Pesticide Registration Improvement Act (PRIA):</b> Streamlines the pesticide registration process and ensures that pesticides are evaluated for safety and efficacy.
            </p>
            <br>
           
        </div>

    </section>


    <!-- buttons -->
    <div class="p-b">
        <a href="../FERTILIZER/fertilizer.php" class="btn-1 prev"><i class="fa fa-arrow-left"></i>Prev</a>
        <a href="../REVIEWS/reviews.php" class="btn-1 next">Next<i class="fa fa-arrow-right"></i></a>
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
    <script src="../LAWS/laws.js"></script>


</body>

</html>