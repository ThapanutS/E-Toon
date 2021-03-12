<?php
  session_start();
  include_once 'Login/includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Toon</title>
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA6OgwALfnLwDnxTAAv9owAOfQLwDU5i8A19MwAJ3nMAB3rSQA1tAvAOfnMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC7EAAAAAAAu7u7AAAAAAC7u7tTAAAAALu7VVMzAAAAuydXMzMAAABiJ3dzMwAAAIgnd6MzAAAAiCeqozMAAACIiKqjMwAAAIiIhKMAAAAAiIiIAAAAAAAAiJAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAPj/AADgfwAA4B8AAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAfAADgfwAA+P8AAP//AAD//wAA" rel="icon" type="image/x-icon" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/button-upload-hover.css" type="text/css">
    <link rel="stylesheet" href="css/profile-hover.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/profile-sidebar.css" type="text/css">
    <link rel="stylesheet" href="css/input-box.css" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<title>E-TOON</title>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-right">
                <?php
                      if(isset($_SESSION['userId'])){
                        echo '<a href="Login/includes/logout.inc.php" class="login-panel"><i class="fa fa-user"></i>Logout</a>';
                        echo '<a href="http://localhost/E-Toon/profile.php" class="login-panel">';
                        echo '<i class="fa fa-user"></i>';
                        echo $_SESSION['uName'];
                        echo '&nbsp; &nbsp; &nbsp; &nbsp;';
                        echo '</a>';
                        if($_SESSION['type'] == 'admin'){
                          echo '<a href="http://localhost/E-Toon/admin.php" class="login-panel">';
                          echo '<i class="fa fa-user"></i>';
                          echo 'Admin';
                          echo '&nbsp; &nbsp; &nbsp; &nbsp;';
                          echo '</a>';
                        }
                      }
                      else {
                        echo '<a href="Login/login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>';
                      }
                    ?>
                    <div class="top-social">
                        <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <form action="http://localhost/E-Toon/genres/Search.php" method="POST">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                      <div class="logo">
                          <a href="/e-toon">
                              <img src="img/Logo_E-Toon.png" alt="">
                          </a>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                                <div class="input-group">
                                <input type="text" placeholder="Find something?" name = "find">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </header>
    <!-- Header End -->
    <body>
<div class="nav-item">
            <div class="container">
                <div class="nav-menu mobile-menu dropdown">
                    <ul>
						<li><a href="http://localhost/E-Toon/genres/PageAllgenres.php">All Genres</a></li>
                        <li><a href="http://localhost/E-Toon/genres/PageFantasy.php">Fantasy</a></li>
                        <li><a href="http://localhost/E-Toon/genres/PageSport.php">Sport</a></li>
                        <li><a href="http://localhost/E-Toon/genres/PageSchool.php">School</a></li>
					    <li><a href="http://localhost/E-Toon/genres/PageAction.php">Action</a></li>
					    <li><a href="http://localhost/E-Toon/genres/PageLoveComedy.php">LoveComedy</a></li>
						<li><a href="http://localhost/E-Toon/genres/PageAdult.php">Adult</a></li>
                    </ul>
                </div>
				<br>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>



    <!-- Profile -->
    <div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
            <?php
            echo $_SESSION['uName'];
            ?>
					</div>
					<div class="profile-usertitle-job">
						Member
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="./profile.php">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="./profile-setting.php">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
        <div class="profile-content" style="background-color:#F1F3FA">
          <?php
          echo "<div align='center'>";
          echo "<img class='img-responsive' src='Login/includes/profile-picture/".$_SESSION['proImg'].".jpg?'".mt_rand()." width='250' height='250'>";
          echo "<br>";
          echo '<span style="color:#FF0000;text-align:center;">Please choose jpg file.</span>';
          echo "</div>";
          ?>
          <form action="Login/includes/upload.inc.php" method="POST" enctype='multipart/form-data'>
            <div align='center'>
              <br>
              <input type='file' name='file'>
            </div>
            <div align='center'>
              <br><br>
	            <button class="btn" name="submit"><span>Upload</span></button>
            </div>
          </form>
        </div>
		</div>
	</div>
</div>
<br>
<br>
    <!-- Profile End -->

        <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <ul>
                          <li>Contact</li>
                          <li>Instagram: E-TOON-TH</li>
                          <li>Fanpage: E-TOON TH</li>
                          <li>Fanpage: EToon! TH</li>
                          <li>Email: E_TOON@etoon.co.th</li>
                        </ul>
                        <div class="footer-social">
                          <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                          <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                          <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Genres<i class="fa fa-heart-o" aria-hidden="true"></i></h5>
                        <ul>
                            <li><a href="http://localhost/E-Toon/genres/PageAllgenres.php">All genres</a></li>
                            <li><a href="http://localhost/E-Toon/genres/PageAction.php">Action</a></li>
                            <li><a href="http://localhost/E-Toon/genres/PageAdult.php">Adult</a></li>
                        
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Genres<i class="fa fa-heart-o" aria-hidden="true"></i></h5>
                        <ul>
                          <li><a href="http://localhost/E-Toon/genres/PageFantasy.php">Fantasy</a></li>
                          <li><a href="http://localhost/E-Toon/genres/PageLoveComedy.php">LoveComedy</a></li>
                          <li><a href="http://localhost/E-Toon/genres/PageSchool.php">School</a></li>
                          <li><a href="http://localhost/E-Toon/genres/PageSport.php">Sport</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>My Account</h5>
                        <div class="footer-widget">
                            <ul>
                                <li><a href="http://localhost/E-Toon/profile.php">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Silpakorn</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
