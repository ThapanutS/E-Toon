<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>


    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Toon</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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



</head>
<body>

	<title>E-TOON</title>
        </div>
        <style>
        img {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 600px;
          max-width: 120%;
          height: auto
        }
		.button {
			background-color: #DAA520;
			border: none;
			color: white;
			padding: 10px 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 10px;
		}
		.button:hover {
			background-color: #4CAF50; /* Green */
			color: white;
		}
		.dropbtn {
			background-color: #4CAF50;
			color: white;
			padding: 15px 32px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 20px;
			background-image: url("");

		}


		#myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #DAA520;
			color: white;
			cursor: pointer;
			padding: 10px;
			border-radius: 4px;
		}

		#myBtn:hover {
			background-color: #555;
		}

		.dropbtn {
			background-color: #0;
			color: white;
			padding: 10px 10px;
			font-size: 10px;
			border: none;
			cursor: pointer;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			right: 0;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 10px 10px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1;}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #4CAF5;
		}
		.center {
		  display: block;
          margin-left: auto;
          margin-right: auto;
          width: 600px;
          max-width: 100%;
          height: auto
		}


        </style>
			<div id="top-menu" style="color: #fff; height: 72px; width: 100%; padding: 10px; background-image: linear-gradient(180deg,#000,transparent); position: fixed;">
				<div class="float-right d-block d-sm-none">
					<button class="btn btn-sm btn-success"><i class="fas fa-list"></i> Chapter</button>
				</div>
				<div class="float-left d-none d-sm-block reader_head text-ellipsis"><a href="http://localhost/E-toon/">
					<span class="text-white">E-TOON</span><span style="color: #F1C40F;">.NET</span></a> - <span ><a href="http://localhost/E-Toon/genres/Sololeveling/index.php" class="text-white"> Solo leveling - Chapter 0</a></span>
				</div>
				<div class="float-right mt-1 d-none d-sm-block">
					<table width="100%">

						<div >
							<div class ="fixed2">
							<a href="#" target="_blank">
								<button class="button">Prev</button>
							</a>
							<div class="dropdown">
							<button class="dropbtn">Episode</button>
								<div class="dropdown-content">
									<a href="http://localhost/E-Toon/genres/Sololeveling/chapter0/index.php">ตอนที่ 0</a>
									<a href="http://localhost/E-Toon/genres/Sololeveling/chapter1/index.php">ตอนที่ 1</a>
									<a href="http://localhost/E-Toon/genres/Sololeveling/chapter2/index.php">ตอนที่ 2</a>
								</div>
							</div>
							<a href="http://localhost/E-Toon/genres/Sololeveling/chapter1/index.php" target="_blank">
								<button class="button">Next</button>
							</a>

							</div>
						</div>

					</table>
				</div>
			</div>
		</div>
    </header>
	<!-- script scrollTop--->
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

		<script>
			var mybutton = document.getElementById("myBtn");

			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
			}
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
			</script>
	<!-- script scrollTop--->
    <!-- Header End -->
    <!-- image begin-->

            <a alt="image"  title="for edu"
              rel="nofollow" ondragstart="return false;" onselectstart="return false;" oncontextmenu="return false;">

                      <img src="https://drive.google.com/uc?export=view&id=1-Jxic2RCDnlRXZYgkmikmtKPp-9AhD0O" >

                      <img src="https://drive.google.com/uc?export=view&id=1rPtt5XKAVkvfCzKfKc0i0BetWXmoItW3" >

                      <img src="https://drive.google.com/uc?export=view&id=1_R7poxN--5HZH6cs40LQdW2KtGX9NE0y" >

                    <img src="  https://drive.google.com/uc?export=view&id=1Z6sOzye6FcgI76uRt6acBM3p-_5uLbWJ" >

                    <img src="  https://drive.google.com/uc?export=view&id=1UnKFsEhLqCp-HfPUdm0R1ySFwrHg4Yq7" >

                      <img src="https://drive.google.com/uc?export=view&id=1Opy5goAr3X9SvS2CCkD_ViaY6oherLM7" >

                      <img src="https://drive.google.com/uc?export=view&id=1mVBCEwhCYx9Q3uB6XuEFfeJLqzGW4u6y" >

                      <img src="https://drive.google.com/uc?export=view&id=1pObm2QjIlbKOAUJDO1QzJJ9wpNOLYdAZ" >

                    <img src="  https://drive.google.com/uc?export=view&id=1PA9B7hMg7wF_UGcVfjxZwERcFX-4SsPl" >

                    <img src="  https://drive.google.com/uc?export=view&id=1Arb2VFf12P0HDpzHcQbWl4Ii4NOv0aNr" >
            </a>

<!-- image End -->
    <!-- Footer Section Begin -->

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
