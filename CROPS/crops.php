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
    <link rel="stylesheet" href="../CROPS/crops.css">

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
            <h3>See our Best Crops...</h3>
        </div>
    </section>


    <!-- crops description -->
    <section class="crops-description">

        <h1 class="heading">our <span>crops</span></h1>

        <p>
        <p>
            <b style="color:brown;">Crops</b> are plants, or products made from plants, that are grown and harvested for subsistence or for
            profit.
            Crops are typically divided into six categories: food crops, feed crops, fiber crops, oil crops, ornamental
            crops, and industrial crops. Ever since hunter-gatherer societies shifted to become agricultural societies
            during the Neolithic period about 10,000 years ago, crops have become the primary method of feeding humans
            in every corner of the world. To this day, they drive not only food distribution and consumption, but also
            fuel, manufacturing, and virtually every other industry.
        </p>
        <br>
        <p>
            <b style="color:brown;">Food crops</b> are subsistence crops that are meant for human consumption. They include fruits,
            vegetables,
            grains, and tubers, like potatoes. Grains, which include crops like wheat, rice, and corn, are the most
            popular crops in the world, with wheat as the most widely grown crop overall.
        </p>
        <br>
        <p>
            <b style="color:brown;">Feed crops</b> are grown and harvested to feed livestock like cows, horses, pigs, and sheep. Also known
            as
            animal feed or fodder, these crops can be grown and harvested like food crops. They can also be grown in
            large fields (pastures) or meadows where animals can graze (or forage) for the food. Feed crops include
            cereal grains (like oats), alfalfa, and various kinds of grasses and hay. Feed crops are typically
            engineered to meet the livestock’s specific nutritional needs. According to the Food and Agriculture
            Organization (FAO) division of the United Nations, 33 percent of the world’s croplands are used for growing
            feed crops.
        </p>
        <br>
        <p>
            <b style="color:brown;">Fiber crops</b> are grown specifically so that they can be processed into textiles, rope, or paper
            products.
            Instead of being directly consumed, fiber crops like cotton, flax, or hemp are harvested and then dried or
            chemically transformed to create other products. For example, fiber-rich crops like bamboo can be turned
            into a pulp, which can then be used to make paper.
        </p>
        <br>
        <p>
            <b style="color:brown;">Oil crops</b> are grown either for primary (human consumption) or secondary (industrial) uses. Edible oil
            crops
            include corn, sunflower, and olives. Soybeans are the world’s most popular oil crop. In addition to food and
            cooking uses, oil crops may also be used to create paints, soaps, machine lubricants, cosmetics, or fuel.
        </p>
        <br>
        <p>
            <b style="color:brown;">Ornamental crops</b> are plants and trees used for landscaping or for gardening. Often grown in
            nurseries,
            ornamental crops are harvested for either direct sale to consumers, or for commercial purposes. Examples of
            ornamental crops include shade trees, flowering trees, shrubs, flowers, and grasses.
        </p>
        <br>
        <p>
            <b style="color:brown;">Industrial crops</b> are crops that are not consumed, but rather harvested and used in manufacturing
            processes,
            machines, or fuel production. Rubber is an example of an industrial crop. Rubber is created from latex,
            which is a substance that is found within the Hevea tree, and then processed and treated so that the rubber
            can be transformed into other products for a variety of industrial uses.
        </p>
        </p>

        <div class="cropses">

            <div class="vegitables">
                <a href="../CROPS/crops_description/Tomatto/tomatto.html"><img title="click for detials!"
                        src="../CROPS/crops_image/Tomatto_pic.png" alt="nill"></a>
                <p style="text-align: center;font-size: 2rem;">Tomatto</p>     

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/Okra/okra.html"><img title="click for detials!"
                        src="../CROPS/crops_image/Okra_pic.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Okra</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/Cabbage/cabbage.html"><img title="click for detials!"
                        src="../CROPS/crops_image/Cabbage_pic.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Cabbage</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/potato/potato.html"><img title="click for detials!"
                        src="../CROPS/crops_image/potato.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Potato</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/Onion/onion.html"><img title="click for detials!"
                        src="../CROPS/crops_image/onion.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Onion</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/beans/beans.html"><img title="click for detials!"
                        src="../CROPS/crops_image/beans.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Beans</p>

            </div>

            <div class="vegitables">
                <a href="../CROPS/crops_description/chilli/chilli.html"><img title="click for detials!"
                        src="../CROPS/crops_image/chilli.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Chilli</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/Cauliflower/cauliflower.html"><img title="click for detials!"
                        src="../CROPS/crops_image/cauliflower.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Cauliflower</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/capsicum/capsicum.html"><img title="click for detials!"
                        src="../CROPS/crops_image/capsicum.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Capsicum</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/pumpkin/pumpkin.html"><img title="click for detials!"
                        src="../CROPS/crops_image/pupmkin.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Pumpkin</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/Brinjal/brinjal.html"><img title="click for detials!"
                        src="../CROPS/crops_image/brinjal.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Brinjal</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/giger/ginger.html"><img title="click for detials!"
                        src="../CROPS/crops_image/ginger.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Ginger</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/garlic/garlic.html"><img title="click for detials!"
                        src="../CROPS/crops_image/garlic.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Garlic</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/banana/banana.html"><img title="click for detials!"
                        src="../CROPS/crops_image/banana.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Banana</p>

            </div>
            <div class="vegitables">
                <a href="../CROPS/crops_description/papaya/papaya.html"><img title="click for detials!"
                        src="../CROPS/crops_image/papaya.png" alt="nill"></a>
                        <p style="text-align: center;font-size: 2rem;">Papaya</p>

            </div>

        </div>
    </section>



    <!-- crops section -->
    <section class="crops" id="crops">

        <div class="crops-slider">

            <div class="r-txt">
                <h3>seeds</h3>
            </div>

            <div class="slider">
                <div class="box">
                    <img src="../image/crop_1.png" alt="error to load">
                    <h3>Yellow Corn</h3>
                    <div class="price">Rs. 120/-</div>
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
                    <img src="../CROPS/crops_image/ginger.png" alt="error to load">
                    <h3>Garlic</h3>
                    <div class="price">Rs. 122/-</div>
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
                    <img src="../CROPS/crops_image/garlic.png" alt="error to load">
                    <h3>Garlic</h3>
                    <div class="price">Rs. 190/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>


                <div class="box">
                    <img src="../CROPS/crops_image/banana.png" alt="error to load">
                    <h3>Banana</h3>
                    <div class="price">Rs. 250/-</div>
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
                    <img src="../CROPS/crops_image/chilli.png" alt="error to load">
                    <h3>chilli</h3>
                    <div class="price">Rs. 200/-</div>
                    <div class="stars">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="" class="btn-1">add to cart <i class="fa fa-shopping-cart"></i></a>
                </div>


                <div class="box">
                    <img src="../image/crop_2.png" alt="error to load">
                    <h3>Rice</h3>
                    <div class="price">Rs. 105/-</div>
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
                    <img src="../image/crop_3.png" alt="error to load">
                    <h3>Papaya</h3>
                    <div class="price">Rs. 129/-</div>
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
                    <img src="../image/crop_4.jpg" alt="error to load">
                    <h3>Peas</h3>
                    <div class="price">Rs. 144/-</div>
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
                    <img src="../image/crop_5.png" alt="error to load">
                    <h3>Black Bringal</h3>
                    <div class="price">Rs. 120/-</div>
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
                    <img src="../image/crop_6.png" alt="error to load">
                    <h3>Cauliflower</h3>
                    <div class="price">Rs. 140/-</div>
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
                    <img src="../image/crop_7.png" alt="error to load">
                    <h3>Tomatto</h3>
                    <div class="price">Rs. 113/-</div>
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



    <!-- weather_forecast section -->



    <!-- buttons -->
    <div class="p-b">
        <a href="../SERVICE/service.php" class="btn-1 prev"><i class="fa fa-arrow-left"></i>Prev</a>
        <a href="../FERTILIZER/fertilizer.php" class="btn-1 next">Next<i class="fa fa-arrow-right"></i></a>
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
    <script src="../CROPS/crops.js"></script>


</body>

</html>