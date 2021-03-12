<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="./register.php" class="signup-image-link">Create an account</a>
                        <a href="../index.php" class="signup-image-link">Go back to home</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form class="register-form" id="login-form" action="includes/signin.inc.php" method="POST">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            if(strpos($fullUrl, "error=emptyfields") == true){
                              echo '<span style="color:#FF0000;text-align:center;">Please fill email and password</span>';
                            }
                            elseif(strpos($fullUrl, "error=wrongpassword") == true){
                              echo '<span style="color:#FF0000;text-align:center;">Invalid email or password</span>';
                            }
                            elseif(strpos($fullUrl, "error=nouser") == true){
                              echo '<span style="color:#FF0000;text-align:center;">Invalid email or password</span>';
                            }
                            ?>
                            <div class="form-group form-button">
                                <input type="submit" name="sign-in" id="sign-in" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
