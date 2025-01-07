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
    <div  style = "text-align:center;" class = "form-group">
        <img style = "height:15rem;width:13rem;border-radius:10px" src="../image/website_logo.png" alt="">
    </div>
    <div style = "box-shadow:white;border-radius:10px;width:60rem;margin-top:3rem " class = "container">

        <?php
        // print_r($_POST);// using for read and display currently stored data...

        if(isset($_POST["submit"])){
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if(empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
                array_push($errors,"all fields are required..");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "email is not valid..");
            }
            if(strlen($password < 8)){
                array_push($errors, "you should have to push the password 8 character long..");
            }
            if($password != $passwordRepeat){
                array_push($errors, "password does not match");
            }

            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if($rowCount > 0){
                array_push($errors, "Email alread exists!!");
            }

            if(count($errors)>0){
                foreach($errors as $error){
                    echo "<div class = 'alert alert-danger'> $error </div>";
                }
            }

            else{
                require_once "database.php";
                
                $sql = "INSERT INTO users (full_name,email,password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);

                if($prepareStmt){
                    mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);

                    echo "<div class = 'alert alert-success'>You are registered successfully!!</div>";
                }
                else{
                    die("something went wrong...");
                }
            }
        }
        ?>


        <form action = "registration.php" method = "post">
            
           
            <div class = "form-group">
                <input style = "margin: 0 auto ;font-size: 1.5rem;height:3rem; width:50rem ;" type ="text" class = "form-control" name = "fullname" placeholder = "enter your full name..">
            </div>

            <div class = "form-group">
                <input style = "margin: 0 auto ;font-size: 1.5rem;height:3rem; width:50rem ;" type ="email" class = "form-control" name = "email" placeholder = "enter your email..">
            </div>

            <div class = "form-group">
                <input style = "margin: 0 auto ;font-size: 1.5rem;height:3rem; width:50rem ;" type ="password" class = "form-control" name = "password" placeholder = "enter your password..">
            </div>

            <div class = "form-group">
                <input style = "margin: 0 auto ;font-size: 1.5rem;height:3rem; width:50rem ;" type ="password" class = "form-control" name = "repeat_password" placeholder = "repeat your password..">
            </div>

            <div style = "text-align:center;" class = "form-btn">
                <input style = "font-size: 1.5rem;margin-top: 1rem;" type = "submit" class = "btn btn-primary" value = "Register" name = "submit">
            </div>
        </form>
        <div><p style = "font-size: 2rem;text-align:center;margin-top: 1rem;"><span style = "color:white; ">Already registered. </span><a href="login.php">Login Now</a></p></div>
    </div>
</body>
</html>