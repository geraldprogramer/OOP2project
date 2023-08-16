<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
</div>
    <h1 style="text-align:center;color:blue;"> Supreme Shuttle Fleet Management System </h1>
    <div class="banner">
    </div>
    <a href="index.php" style="color:blue;font-size: 15px; text-decoration:underline; width:10%; margin-left:5px;height:35px;" >Back Home</a>

    <center> 
        <div class="form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 style= "color:blue;">Please Login </h2>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>

            <label for="email">Email</label><br>
            <input type="email" name="email" required placeholder="Enter your Email"><br>
            <label for="password">Password </label><br>
            <input type="password" name="password" required placeholder="Enter your Password"><br>

            <input type="submit" name="login"value="Login "class="form-btn">
            <a href="forgot-password.php">Forgot password?</a>

            <p> Don't have an Account? <a href="signup-user.php">Signup Now</a></p>
                </form>
        </div>
        </center>
</body>
</html>