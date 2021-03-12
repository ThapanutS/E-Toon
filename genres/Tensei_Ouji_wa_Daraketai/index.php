<?php
  session_start();
  include_once '../../Login/includes/dbh.inc.php';
  if(!isset($_SESSION['userId'])){
    header("Location: Login/login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Toon</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA6OgwALfnLwDnxTAAv9owAOfQLwDU5i8A19MwAJ3nMAB3rSQA1tAvAOfnMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC7EAAAAAAAu7u7AAAAAAC7u7tTAAAAALu7VVMzAAAAuydXMzMAAABiJ3dzMwAAAIgnd6MzAAAAiCeqozMAAACIiKqjMwAAAIiIhKMAAAAAiIiIAAAAAAAAiJAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAPj/AADgfwAA4B8AAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAfAADgfwAA+P8AAP//AAD//wAA" rel="icon" type="image/x-icon" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

* {
  box-sizing: border-box;
}


/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 18%;
}

/* Middle column */
.column.middle {

  width: 82%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}


</style>
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
                        echo '<a href="./../../profile.php" class="login-panel">';
                        echo '<i class="fa fa-user"></i>';
                        echo $_SESSION['uName'];
                        echo '&nbsp; &nbsp; &nbsp; &nbsp;';
                        echo '</a>';
                        if($_SESSION['type'] == 'admin'){
                          echo '<a href="./../../admin.php" class="login-panel">';
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
        <form action="./../Search.php" method="POST">
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
    <div class="nav-item">
            <div class="container">
                <div class="nav-menu mobile-menu dropdown">
                    <ul>
						<li><a href="../../index.php">Home</a></li>
                        <li><a href="../PageFantasy.php">Fantasy</a></li>
                        <li><a href="../PageSport.php">Sport</a></li>
                        <li><a href="../PageSchool.php">School</a></li>
					    <li><a href="..//PageAction.php">Action</a></li>
					    <li><a href="../PageLoveComedy.php">LoveComedy</a></li>
						<li><a href="../PageAdult.php">Adult</a></li>
                    </ul>
                </div>
				<br>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    <!-- Header End -->



 <!-- Cartoon EP  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img  src="/E-Toon/genres/img/Tensei Ouji wa Daraketai.jpg"  hspace="100" vspace="20" width="270" height="345">
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <h3>Tensei Ouji wa Daraketai</h3>
                        <br>
                        <p>เรื่องย่อ : ฮารูโตะ เด็กหนุ่มธรรมด๊าธรรมดา ถูกทรัคซังส่งไปต่างโลก(อีกแล้ว!?) แถมยังได้ไปเกิดใหม่เป็นเจ้าชายทั้งที แต่ว่า...ดันอยากนอนขี้เกียจเนี่ยนะ!?</p>
                    </br>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="row ">
		<div class="column side">

		</div>
		<div class="column middle " class="about_info">
		<div>
			<h4> <img src="img\Book.png" width="30" height="30"> Manga Episode</h4>

			<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

<!-- เพิ่มตอน --->
<?php
$sql = "SELECT * FROM episode INNER JOIN cartoon ON id_cartoon = cartoon_id WHERE id_cartoon = 11";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
echo "<div class='row1'>";
echo "<div class='cell' data-title='Full Name'>";
echo "<a href='".$row['link']."'>".$row['episode_number']."</a>";
echo "</div>";
echo "</div>";
}
?>

<!-- เพิ่มตอน --->

					</div>
			</div>
		</div>
		</div>

	</div>
	</div>
	<br>
    <!--/ Cartoon Ep -->


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
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>

</html>
