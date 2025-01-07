<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: login.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- normal css file -->
    <link rel="stylesheet" href = "style1.css"> 

    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body style = "background-color: rgb(27, 26, 26);">
    <div style = "text-align:center;" class = "form-group">
        <img style = "height:15rem;width:13rem;border-radius:10px" src="../image/website_logo.png" alt="">
    </div>
    <div style = "box-shadow:white;border-radius:10px;width:60rem;margin-top:3rem " class="container">
        <?php
        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user){
                if(password_verify($password, $user["password"])){
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }
                else{
                    echo "<div class = 'alert alert-danger'>Password does not exist or not match</div>";
                }
            }
            else{
                echo "<div class = 'alert alert-danger'>Email does not exist or not match</div>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input style = "margin: 0 auto ;font-size: 1.5rem;height:3rem; width:50rem ;" type="email" name = "email" placeholder = "enter your email.." class = "form-control">
            </div>

            <div class="form-group">
                <input style = "margin: 0 auto ;font-size: 1.5rem;height:3rem; width:50rem ;" type="password" name = "password" placeholder = "enter your password.." class = "form-control">
            </div>

            <div style = "text-align:center;" class = "form-btn">
                <input style = "font-size: 1.5rem;margin-top: 1rem;" type = "submit" class = "btn btn-primary" value = "Login" name = "login">
            </div>
        </form>
        <div><p style = "font-size: 2rem;text-align:center;margin-top: 1rem;"><span style = "color:white; ">Not yet registered? </span><a href="registration.php">Register Now</a></p></div>
    </div>
</body>
</html>