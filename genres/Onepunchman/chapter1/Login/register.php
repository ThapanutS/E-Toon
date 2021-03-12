<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="includes/signup.inc.php" method="POST">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <?php
                              $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                              if(strpos($fullUrl, "error=emptyfields&name") == true){
                                echo '<span style="color:#FF0000;text-align:center;">Please fill in all field</span>';
                              }
                              elseif(strpos($fullUrl, "error=invalidemailname") == true){
                                echo '<span style="color:#FF0000;text-align:center;">Invalid email</span>';
                              }
                              elseif(strpos($fullUrl, "error=invalidname&email") == true){
                                echo '<span style="color:#FF0000;text-align:center;">Invalid name</span>';
                              }
                              elseif(strpos($fullUrl, "error=passcheck") == true){
                                echo '<span style="color:#FF0000;text-align:center;">Please fill password again</span>';
                              }
                              elseif(strpos($fullUrl, "error=usertaken&email") == true){
                                echo '<span style="color:#FF0000;text-align:center;">This email has been used</span>';
                              }
                            ?>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="./login.php" class="signup-image-link">I am already member</a>
                        <a href="../index.php" class="signup-image-link">Go back to home</a>
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
