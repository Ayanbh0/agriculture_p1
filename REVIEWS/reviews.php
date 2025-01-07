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

    <!-- css for review.php -->
    <link rel="stylesheet" href="../REVIEWS/reviews.css">

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
            <h3>The Review section, provide us reviews...</h3>
        </div>
    </section>


    <!-- review-provider section -->
    <section class="review-provider">

        <h1 class="heading">give us <span>review</span></h1>
        <p>The user-generated review page of an agriculture website is an invaluable platform that empowers farmers and
            agricultural professionals to share their firsthand experiences and insights about various products and
            services. This interactive space allows users to post detailed reviews on a wide range of items, including
            seeds, fertilizers, machinery, and pest control solutions, fostering a sense of community and collaboration
            among users. Each review typically includes a star rating system, written feedback, and sometimes photos,
            providing prospective buyers with a well-rounded perspective on the effectiveness and reliability of the
            products. Users can filter reviews by categories, such as crop type or specific agricultural practices,
            making it easier to find relevant information tailored to their needs. The authenticity of user-generated
            content enhances trust and credibility, as potential buyers can learn from the successes and challenges
            faced by their peers. Additionally, the ability to comment on and discuss reviews encourages engagement and
            knowledge sharing, creating a dynamic environment where users can seek advice, ask questions, and contribute
            to the collective wisdom of the agricultural community. Overall, this user-driven review page not only aids
            in informed decision-making but also strengthens the bonds within the agricultural sector, promoting a
            culture of transparency and support.</p>

        <div class="wrapper1">
            <h3 class="h3">give us reviews</h3>

            <form action="#">
                <div class="ratting">
                    <input type="number" name="ratting" hidden>
                    <i class="fa fa-star-o str" style="--i : 0;" aria-hidden="true"></i>
                    <i class="fa fa-star-o str" style="--i : 1;" aria-hidden="true"></i>
                    <i class="fa fa-star-o str" style="--i : 2;" aria-hidden="true"></i>
                    <i class="fa fa-star-o str" style="--i : 3;" aria-hidden="true"></i>
                    <i class="fa fa-star-o str" style="--i : 4;" aria-hidden="true"></i>
                </div>

                <textarea name="opinion" cols="30" rows="5" placeholder="your opinion................."></textarea>

                <div class="btn-group">
                    <button type="submit" class="btn-1 sub">Submit</button>
                    <button class="btn-1">Cancel</button>

                </div>
            </form>
        </div>

    </section>




    <!-- Reviews section -->
    <section class="reviews" id="reviews">
        <div class="review-content">

            <div class="r-txt">
                <h3>top reviews</h3>
            </div>

            <div class="wrapper">
                <div class="review-slider">
                    <img src="../image/person-1.png" alt="error to load" class="r-s">
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <p class="r-con">"I started using GreenGrow's organic fertilizer on my vegetable garden last season,
                        and the results have been incredible! My tomatoes and peppers have never looked healthier, and
                        the taste is outstanding. I love that it's made from natural ingredients, so I feel good about
                        using it. The application was easy, and I noticed a significant improvement in soil health. I
                        highly recommend this product to anyone looking to boost their garden organically!"</p>

                    <span class="r-con1">- max</span>
                </div>

                <div class="review-slider">
                    <img src="../image/person-2.png" alt="error to load" class="r-s">
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <p class="r-con">"I purchased a variety of heirloom seeds from SeedCo for my small farm, and
                        overall, I’m quite pleased. The germination rate was high, and the plants grew robustly.
                        However, I did encounter some issues with the squash variety, which seemed more susceptible to
                        pests. I would suggest checking for pest resistance when selecting seeds. Still, I appreciate
                        the quality and diversity of their offerings and will continue to use them for my future
                        planting."</p>

                    <span class="r-con1">- jimmy</span>
                </div>

                <div class="review-slider">
                    <img src="../image/person-3.png" alt="error to load" class="r-s">
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <p class="r-con">"I bought the FarmMaster 3000 last year, and while it has some great features, I’ve
                        had mixed feelings about its performance. The power is impressive, and it handles heavy loads
                        well, but I’ve experienced some mechanical issues that required service sooner than expected.
                        Customer support was helpful, but I wish the warranty covered more. It’s a solid tractor for the
                        price, but I would recommend doing thorough research before purchasing."</p>

                    <span class="r-con1">- adam</span>
                </div>

                <div class="review-slider">
                    <img src="../image/person-4.png" alt="error to load" class="r-s">
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <p class="r-con">"I recently installed the AquaFlow irrigation system on my farm, and I’m very happy
                        with its performance. The setup was relatively easy, and the system has significantly reduced my
                        water usage while keeping my crops well-hydrated. I love the timer feature, which allows me to
                        automate watering schedules. My only complaint is that the instructions could be clearer for
                        first-time users. Overall, it’s a great investment for anyone looking to improve their
                        irrigation efficiency!"</p>

                    <span class="r-con1">- augustine</span>
                </div>

                <div class="review-slider">
                    <img src="../image/person-5.png" alt="error to load" class="r-s">
                    <div class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <p class="r-con">"EcoGuard’s pest control solution has been a game-changer for my orchard. I was
                        struggling with aphid infestations, but after applying this product, I saw a dramatic reduction
                        in pests within days. It’s safe for beneficial insects, which is a huge plus for me. The
                        application process was straightforward, and I appreciate that it’s made from natural
                        ingredients. I’ll definitely be using EcoGuard for all my pest control needs moving forward!"
                    </p>

                    <span class="r-con1">- keshav</span>
                </div>

              

            </div>

        </div>
    </section>



    <!-- buttons -->
    <div class="p-b">
        <a href="../LAWS/laws.php" class="btn-1 prev"><i class="fa fa-arrow-left"></i>Prev</a>
        <a href="../CONTACT/contact.php" class="btn-1 next">Next<i class="fa fa-arrow-right"></i></a>
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
    <script src="../REVIEWS/reviews.js"></script>


</body>

</html>