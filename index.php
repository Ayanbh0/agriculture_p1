<?php
session_start();
// Redirect to login page if the user is not logged in
if (!isset($_SESSION["user"])) {
    header("Location: login-register/login.php");
    exit(); // Stop further script execution
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Website</title>

    <!-- Website icon -->
    <link rel="icon" type="image/png" href="../image/website_logo.png">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../HOME/style.css">
</head>

<body>
    <!-- Header Section -->
    <header class="header">
        <a href="../HOME/home.php" title="Website Logo" class="logo">
            <img class="web_lg" src="../image/website_logo.png" alt="Logo">
        </a>

        <!-- Navbar -->
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

        <!-- Navbar Icons -->
        <div class="icons">
            <div class="fa fa-bars" title="Menu" id="menu-btn"></div>
            <div class="fa fa-search" title="Search" id="search-btn"></div>
            <div class="fa fa-shopping-cart" title="Cart" id="cart-btn"></div>
            <a href="logout.php" title="Logout" class="fa fa-sign-out" id="logout-btn"></a>
        </div>

        <!-- Search Form -->
        <form class="search-form">
            <input type="search" id="search-box" placeholder="Search here...">
            <label for="search-box" class="fa fa-search"></label>
        </form>

        <!-- Shopping Cart -->
        <div class="shopping-cart">
            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="../image/image_c_1.png" alt="Rice">
                <div class="content">
                    <h3>Rice</h3>
                    <span class="price">Rs. 135/-</span>
                    <span class="quantity">Qty: 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="../image/image_c_2.png" alt="Tomato">
                <div class="content">
                    <h3>Tomato</h3>
                    <span class="price">Rs. 185/-</span>
                    <span class="quantity">Qty: 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="../image/image_c_3.png" alt="Papaya">
                <div class="content">
                    <h3>Papaya</h3>
                    <span class="price">Rs. 235/-</span>
                    <span class="quantity">Qty: 1</span>
                </div>
            </div>

            <div class="total">Total: Rs. 555/-</div>
            <a href="#" class="btn-1">Re-Check & Order</a>
        </div>
    </header>

    <!-- Main Content -->
    <section>
        <!-- Banner Section -->
        <section class="home" id="home">
            <div class="content">
                <h3>Welcome....</h3>
                <h3>This is Our <span>Agricultural Website....</span></h3>
                <p>
                    Welcome to our Agriculture Hub, your go-to resource for all things related to farming,
                    sustainability, and food production. Explore articles on crop management, livestock care, and
                    sustainable farming techniques, all aimed at promoting a healthier planet and thriving agricultural
                    communities.
                </p>
                <a href="../ABOUT/about.php" class="btn-2">Explore Us <i class="fa fa-hand-o-right"></i></a>
            </div>
        </section>

        <!-- Quote Section -->
        <section class="dialogue">
            <div class="dg">
                <p>“Learn everything that is good from others, but bring it in, and in your own way absorb it; do not
                    become others.” "Comfort is no test of truth. Truth is often far from being comfortable." "Do one
                    thing at a time, and while doing it put your whole soul into it to the exclusion of all else."
                </p>
                <p class="auth">- Swami Vivekananda</p>
            </div>
        </section>
    </section>

    <!-- Footer Section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <a href="../HOME/home.php" title="Website Logo" class="logo">
                    <img src="../image/website_logo.png" alt="Logo">
                </a>
                <p>
                    Thank you for visiting our Agriculture Hub! Connect with us through our social media channels for
                    updates, tips, and community stories. We value your feedback, so feel free to reach out with any
                    questions or suggestions.
                </p>
                <div class="media">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>Contact Us</h3>
                <a href="#" class="links"><i class="fa fa-phone"></i> +91 9999999999</a>
                <a href="#" class="links"><i class="fa fa-phone"></i> +91 8888888888</a>
                <a href="#" class="links"><i class="fa fa-envelope"></i> example@gmail.com</a>
                <a href="https://www.brainwareuniversity.ac.in/" class="links"><i class="fa fa-map-marker"></i> Barasat,
                    West Bengal - 700125</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="../HOME/home.php" class="links"><i class="fa fa-long-arrow-right"></i> Home</a>
                <a href="../ABOUT/about.php" class="links"><i class="fa fa-long-arrow-right"></i> About</a>
                <a href="../SERVICE/service.php" class="links"><i class="fa fa-long-arrow-right"></i> Service</a>
                <a href="../CROPS/crops.php" class="links"><i class="fa fa-long-arrow-right"></i> Crops</a>
                <a href="../FERTILIZER/fertilizer.php" class="links"><i class="fa fa-long-arrow-right"></i> Fertilizer</a>
                <a href="../LAWS/laws.php" class="links"><i class="fa fa-long-arrow-right"></i> Laws/Rules</a>
                <a href="../REVIEWS/reviews.php" class="links"><i class="fa fa-long-arrow-right"></i> Reviews</a>
                <a href="../CONTACT/contact.php" class="links"><i class="fa fa-long-arrow-right"></i> Contact Us</a>
            </div>

            <div class="box">
                <h3>Download APK</h3>
                <a href="#" class="btn-1 d-btn">Download <i class="fa fa-download"></i></a>
            </div>
        </div>

        <div class="copyright">
            Created by <span>KRISHI CULTURE</span> | &copy; All Rights Reserved - 2024.
        </div>
    </section>

    <!-- Main JS -->
    <script src="script.js"></script>
</body>

</html>
