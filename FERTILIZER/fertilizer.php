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
    <link rel="stylesheet" href="../FERTILIZER/fertilizer.css">

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
            <h3>our fertilizer section...</h3>
        </div>
    </section>


    <!-- fertilizer description -->
    <section class="fertilizer-description">

        <h1 class="heading">our <span>fertilizer-section</span></h1>
        <p><b style="color:brown;">Fertilizer</b> plays a crucial role in modern agriculture, serving as a key component
            in enhancing soil fertility
            and promoting healthy crop growth. It provides essential nutrients that plants require for optimal
            development, including nitrogen, phosphorus, and potassium, often referred to as NPK. These nutrients are
            vital for various physiological processes, such as photosynthesis, root development, and fruit production.
            The use of fertilizers has significantly increased agricultural productivity, enabling farmers to meet the
            growing global food demand driven by population growth and urbanization. However, the application of
            fertilizers must be managed carefully to avoid environmental issues such as soil degradation, water
            pollution, and the disruption of local ecosystems. Over-fertilization can lead to nutrient runoff, which
            contaminates waterways and contributes to problems like algal blooms and dead zones in aquatic environments.
            To mitigate these risks, sustainable practices such as precision agriculture, which utilizes technology to
            optimize fertilizer application, and the use of organic fertilizers, such as compost and manure, are gaining
            traction. These methods not only enhance soil health but also promote biodiversity and reduce the carbon
            footprint of agricultural practices. As the agricultural sector continues to evolve, the challenge remains
            to balance the need for increased food production with the imperative of environmental stewardship, making
            the responsible use of fertilizers a critical focus for farmers, researchers, and policymakers alike.
        </p>
        <br>
        <p>
            <p><b style="color:brown;">Nutrient Supply:</b> Fertilizers provide essential nutrients that plants need for growth, primarily nitrogen
            (N), phosphorus (P), and potassium (K), which are crucial for various physiological functions.
            </p>
            <br>
            <p><b style="color:brown;">Types of Fertilizers:</b> There are two main types of fertilizers: synthetic (chemical) fertilizers, which are
            manufactured through industrial processes, and organic fertilizers, which are derived from natural sources
            like compost, manure, and plant residues.
            </p>
            <br>
            <p><b style="color:brown;">Soil Health:</b> Proper use of fertilizers can improve soil fertility and structure, enhancing its ability to
            retain moisture and nutrients, which is vital for sustainable agriculture.
            </p>
            <br>
            <p><b style="color:brown;">Crop Yield:</b> The application of fertilizers has been linked to increased crop yields, helping farmers meet
            the food demands of a growing global population.
            </p>
            <br>
            <p><b style="color:brown;">Environmental Impact:</b> Overuse or improper application of fertilizers can lead to environmental issues, such
            as nutrient runoff into water bodies, causing eutrophication, algal blooms, and dead zones.
            </p>
            <br>
            <p><b style="color:brown;">Precision Agriculture:</b> Advances in technology, such as precision agriculture, allow for more efficient and
            targeted fertilizer application, reducing waste and minimizing environmental impact.
            </p>
            <br>
            <p><b style="color:brown;">Soil Testing:</b> Regular soil testing is essential to determine nutrient needs and avoid over-fertilization,
            ensuring that crops receive the right amount of nutrients.
            </p>
            <br>
            <p><b style="color:brown;">Sustainable Practices:</b> Integrating organic fertilizers, crop rotation, and cover cropping can enhance soil
            health and reduce reliance on synthetic fertilizers, promoting sustainable agricultural practices.
            </p>
            <br>
            <p><b style="color:brown;">Regulatory Standards:</b> Many countries have regulations governing fertilizer use to minimize environmental
            harm and ensure food safety, emphasizing the importance of responsible application.
            </p>
            <br>
            <p><b style="color:brown;">Economic Considerations:</b> Fertilizer costs can significantly impact farm profitability, making it essential
            for farmers to balance input costs with expected crop yields.
            </p>
        </p>


        <div class="medicine">

            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/amonium_nitrate/amonium_nitrate.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/amonium_nitrate.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Amonium Nitrate</p>

            </div>
            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/amonium_phosphate/amonium_phosphate.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/amonium_phosphate.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Amonium Phosphate</p>

            </div>
            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/Calcium_Nitrate/Calcium_Nitrate.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/Calcium-Nitrate.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Calcium Nitrate</p>

            </div>
            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/epsom/esom.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/epsom_salt.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Epsom Salt</p>

            </div>
            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/nps/npk.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/npk.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">NPK</p>

            </div>
            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/or_fer/or_fer.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/Organic-fertilizers.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Organic Fertilizer</p>

            </div>

            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/Potash/Potash.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/potash.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Potash</p>

            </div>
            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/srf/srf.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/slow-release-fertilizer.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Slow Release</p>

            </div>
            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/Superphosphate/Superphosphate.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/Superphosphate.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Superphosphate</p>

            </div>
            <div class="medi">
                <a href="../FERTILIZER/fertilizer_description/urea/urea.html"><img title="click for detials!"
                        src="../FERTILIZER/fertilizer_medicine_image/urea.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Urea</p>

            </div>
        
        </div>

    </section>



    <!-- fertilizer section -->
    <section class="fertilizer" id="fertilizer">

        <div class="fertilizer-slider">

            <div class="r-txt">
                <h3>medicine</h3>
            </div>

            <div class="slider">
                <div class="box">
                    <img src="../FERTILIZER/fertilizer_medicine_image/amonium_nitrate.png" alt="error to load">
                    <h3>Amonium Nitrate</h3>
                    <div class="price">Rs. 450/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>


                <div class="box">
                    <img src="../FERTILIZER/fertilizer_medicine_image/amonium_phosphate.png" alt="error to load">
                    <h3>Amonium Phosphate</h3>
                    <div class="price">Rs. 580/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>


                <div class="box">
                    <img src="../FERTILIZER//fertilizer_medicine_image/Calcium-Nitrate.png" alt="error to load">
                    <h3>Calcium Nitrate</h3>
                    <div class="price">Rs. 329/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>

                <div class="box">
                    <img src="../FERTILIZER/fertilizer_medicine_image/epsom_salt.png" alt="error to load">
                    <h3>Epsom Salt</h3>
                    <div class="price">Rs. 744/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>

                <div class="box">
                    <img src="../FERTILIZER/fertilizer_medicine_image/potash.png" alt="error to load">
                    <h3>Potash</h3>
                    <div class="price">Rs. 970/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>

                <div class="box">
                    <img src="../FERTILIZER/fertilizer_medicine_image/urea.png" alt="error to load">
                    <h3>Urea</h3>
                    <div class="price">Rs. 640/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>

                <div class="box">
                    <img src="../FERTILIZER/fertilizer_medicine_image/Superphosphate.png" alt="error to load">
                    <h3>Superphosphate</h3>
                    <div class="price">Rs. 1120/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>

        </div>

    </section>


    <!-- buttons -->
    <div class="p-b">
        <a href="../CROPS/crops.php" class="btn-1 prev"><i class="fa fa-arrow-left"></i>Prev</a>
        <a href="../LAWS/laws.php" class="btn-1 next">Next<i class="fa fa-arrow-right"></i></a>
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
    <script src="../FERTILIZER/fertilizer.js"></script>


</body>

</html>