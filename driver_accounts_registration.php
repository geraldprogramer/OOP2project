<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>
<body>
<div class="header">
<a href="#.php"><img src="/images/supremeshuttlelogo.png"></a>
<div class="btn_driver_accounts">
    </div>
</div>
<center>
            <div class="form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center" style="color:blue;">Register Driver Accounts Form</h2>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
            <label for="name">Full Names</label><br>
            <input type="text" name="name" required placeholder="Enter your Full Names"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" required placeholder="Enter your Email"><br>
            <label for="password">Password </label><br>
            <input type="password" name="password" required placeholder="Enter your Password"><br>
            <label for="cpassword">Confirm Password </label><br>
            <input type="password" name="cpassword" required placeholder="Confirm your Password"><br>
            <label for="user_type">User Type </label><br>
            <select name="user_type">
                <option value="user">Driver</option>
                <option value="admin">Driver</option>
            </select>
            <br>
            <input type="submit" name="signup"value="Signup "class="form-btn">
            <p> Already have an account? <a href="login-user.php">Login Now</a></p>
                </form>
            </div>
                </center>
    
</body>
</html>